<?php

namespace AppBundle\Security\Authentication\Manager;

use AppBundle\Configuration\Parameter\Manager\GlobalParameterManager;
use AppBundle\Security\Authentication\Manager\LockedUserLogManager;
use AppBundle\Document\User;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Servicio para el manejo de registros de errores de autenticación.
 */
class AuthenticationErrorLogManager {

    /**
     * @var GlobalParameterManager
     */
    private $globalParameterManager;

    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @var LockedUserLogManager
     */
    private $lockedUserLogManager;

    // Identificadores de parámetros globales.
    const LOGIN_ATTEMPTS_NAME = 'password_login_retry';
    const LOGIN_BLOCK_INTERVAL_NAME = 'password_login_retry_time';
    // Cantidad de intentos erróneos de autenticación permitidos por defecto.
    const DEFAULT_LOGIN_ATTEMPTS = 3;
    // Intervalo de tiempo expresado en minutos en el que el usuario permanece bloquedo por defecto.
    const DEFAULT_LOGIN_BLOCK_INTERVAL = 5;
    // Intervalo mínimo de bloquéo de usuario expresado en minutos.
    const MIN_USER_BLOCK_INTERVAL = 1;
    // Valor por defecto para identificar el primer intento erróneo de autenticación de usuario.
    const DEFAULT_ATTEMPT_VALUE = 1;

    /**
     * @param GlobalParameterManager $globalParameterManager
     * @param EntityManager $entityManager
     * @param LockedUserLogManager $lockedUserLogManager
     */
    public function __construct(LockedUserLogManager $lockedUserLogManager) {

        $this->lockedUserLogManager = $lockedUserLogManager;
    }

    /**
     * Retorna el intervalo de tiempo restante expresado en minutos en el que el usuario provisto dejará de estar
     * bloqueado. En caso de no estar bloqueado el valor devuelto es nulo.
     *
     * @param string $username
     *
     * @return integer|null
     */
    public function getUserBlockIntervalDifference($username) {
        $user = $this->findOneUserByUsername($username);

        if (null !== $user) {
            $lastAuthenticationErrorLog = $this->getLastAuthenticationErrorLog($user);

            if (null !== $lastAuthenticationErrorLog) {
                if ($this->lockedUserLogManager->isUserBlocked($user)) {
                    $lastAuthenticationErrorLogInterval = $this->getLastAuthenticationErrorLogInterval(
                            $lastAuthenticationErrorLog
                    );
                    $loginBlockInterval = $this->getLoginBlockInterval();

                    if ($lastAuthenticationErrorLogInterval <= $loginBlockInterval) {
                        $userBlockIntervalDifference = $loginBlockInterval - $lastAuthenticationErrorLogInterval;

                        return $userBlockIntervalDifference > 0 ? $userBlockIntervalDifference : self::MIN_USER_BLOCK_INTERVAL;
                    }
                }
            }
        }
    }

    /**
     * Crea un registro asociado a un error de autenticación de usuario.
     *
     * @param Request $request
     * @param string $username
     * @param string $ipAddress
     */
    public function create(Request $request, $username, $ipAddress) {
        $user = $this->findOneUserByUsername($username);

        if (null !== $user) {
            $authenticationErrorLog = new AuthenticationErrorLog();
            $authenticationErrorLog->setUser($user)
                    ->setIpAddress($ipAddress);

            $lastAuthenticationErrorLog = $this->getLastAuthenticationErrorLog($user);

            if (null !== $lastAuthenticationErrorLog) {
                $lastAuthenticationErrorLogInterval = $this->getLastAuthenticationErrorLogInterval(
                        $lastAuthenticationErrorLog
                );
                $loginBlockInterval = $this->getLoginBlockInterval();

                /**
                 * Si el intervalo de tiempo transcurrido entre el último registro de autenticación errónea y la actual
                 * petición es superior al intervalo de tiempo en el que el usuario debe permanecer bloqueado se procede
                 * a desbloquearlo.
                 */
                if ($lastAuthenticationErrorLogInterval > $loginBlockInterval) {
                    $this->lockedUserLogManager->unblockUser($user);
                }

                $lastAuthenticationErrorLogAttempt = $lastAuthenticationErrorLog->getAttempt();
                $loginAttempts = $this->getLoginAttempts();

                /**
                 * Si el usuario no se encuentra bloqueado y a su vez el último intento erróneo de autenticación
                 * coincide con la cantidad de intentos que dispone o la fecha del último registro de sesión es superior
                 * a la fecha del último registro de autenticación errónea, se procede a reestablecer la sesión del
                 * usuario y se establece un valor por defecto para el intento erróneo de autenticación.
                 * En caso contrario, se incrementa el valor para el intento erróneo de autenticación y si este último
                 * coincide con la cantidad de intentos que dispone el usuario se procede a bloquearlo.
                 */
                if (!$this->lockedUserLogManager->isUserBlocked($user) && $lastAuthenticationErrorLogAttempt === $loginAttempts ||
                        $this->isLastSessionLogGreater($user, $lastAuthenticationErrorLog)) {
                    $uri = $request->getSession()->get('reference');
                    $request->getSession()->clear();
                    $request->getSession()->set('reference', $uri);
                    $authenticationErrorLog->setAttempt(self::DEFAULT_ATTEMPT_VALUE);
                } else {
                    $authenticationErrorLog->setAttempt( ++$lastAuthenticationErrorLogAttempt);
                    if ($lastAuthenticationErrorLogAttempt === $loginAttempts) {
                        $this->lockedUserLogManager->blockUser($user);
                    }
                }
            } else {
                $authenticationErrorLog->setAttempt(self::DEFAULT_ATTEMPT_VALUE);
            }

            $this->entityManager->persist($authenticationErrorLog);
            $this->entityManager->flush();
        }
    }

    /**
     * Verifica si el usuario posee o no intentos de autenticación. En caso de no poseer se asume que no debe respetar
     * el flujo de bloquéo.
     *
     * @return boolean
     */
    public function hasLoginAttempts() {
        $loginAttempts = $this->getLoginAttempts();

        return $loginAttempts > 0;
    }

    /**
     * Retorna la cantidad de intentos permitidos que posee un usuario para autenticarse previo a ser bloqueado.
     *
     * @return integer
     */
    private function getLoginAttempts() {
        try {
            $loginAttempts = (int) $this->globalParameterManager->findParameterValueByName(self::LOGIN_ATTEMPTS_NAME);
        } catch (NotFoundHttpException $error) {
            $loginAttempts = self::DEFAULT_LOGIN_ATTEMPTS;
        }

        return $loginAttempts;
    }

    /**
     * Retorna un intervalo de tiempo expresado en minutos en el que el usuario permanece bloquedo.
     *
     * @return integer
     */
    private function getLoginBlockInterval() {
        try {
            $loginBlockInterval = (int) $this->globalParameterManager
                            ->findParameterValueByName(self::LOGIN_BLOCK_INTERVAL_NAME);
        } catch (NotFoundHttpException $error) {
            $loginBlockInterval = self::DEFAULT_LOGIN_BLOCK_INTERVAL;
        }

        return $loginBlockInterval;
    }

    /**
     * Retorna el último registro de autenticación errónea del usuario provisto. En caso de no encontrar un resultado el
     * valor devuelto es nulo.
     *
     * @param User $user
     *
     * @return AuthenticationErrorLog|null
     */
    private function getLastAuthenticationErrorLog(User $user) {
        return $this->entityManager->getRepository('CoreCommonBundle:AuthenticationErrorLog')->findOneBy(
                        array('user' => $user), array('createdAt' => 'DESC')
        );
    }

    /**
     * Retorna un intervalo de tiempo expresado en minutos correspondiente a la diferencia entre el último registro de
     * autenticación errónea provisto y la actual petición.
     *
     * @param AuthenticationErrorLog $authenticationErrorLog
     *
     * @return integer
     */
    private function getLastAuthenticationErrorLogInterval(AuthenticationErrorLog $authenticationErrorLog) {
        return (int) $authenticationErrorLog->getCreatedAt()
                        ->diff(new \DateTime())
                        ->format('%i');
    }

    /**
     * Compara las fechas de creación del último registro de sesión del usuario provisto con la del último registro de
     * autenticación errónea del mismo. En caso de no encontrar un resultado el valor devuelto es nulo.
     *
     * @param User $user
     * @param AuthenticationErrorLog $lastAuthenticationErrorLog
     *
     * @return boolean|null
     */
    private function isLastSessionLogGreater(User $user, AuthenticationErrorLog $lastAuthenticationErrorLog) {
        $lastSessionLog = $this->entityManager->getRepository('CoreCommonBundle:SessionLog')->findOneBy(
                array('users' => $user), array('timeStampIn' => 'DESC')
        );

        if (null !== $lastSessionLog) {
            return $lastSessionLog->getTimeStampIn() > $lastAuthenticationErrorLog->getCreatedAt();
        }
    }

    /**
     * Retorna un usuario asociado al nombre de usuario provisto. En caso de no encontrar un resultado el valor devuelto
     * es nulo.
     *
     * @param string $username
     *
     * @return User|null
     */
    private function findOneUserByUsername($username) {
        return $this->entityManager->getRepository('CoreCommonBundle:User')->findOneBy(array(
                    'username' => $username,
                    'isActive' => true
        ));
    }

}
