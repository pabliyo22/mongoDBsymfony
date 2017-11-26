<?php

namespace AppBundle\Security\Authentication\Manager;

use Core\CommonBundle\Entity\LockedUserLog;
use Core\CommonBundle\Entity\User;
use Doctrine\ORM\EntityManager;

/**
 * Servicio para el manejo de registros de bloquéo de usuario.
 */
class LockedUserLogManager
{
    /**
     * @var EntityManager
     */
    private $entityManager;


    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Crea un registro asociado al bloquéo del usuario provisto.
     *
     * @param User $user
     */
    public function blockUser(User $user)
    {
        $lockedUserLog = new LockedUserLog();
        $lockedUserLog->setLocked(true)
            ->setLockTimeStamp(new \DateTime())
            ->setLockUser($user);

        $this->entityManager->persist($lockedUserLog);
        $this->entityManager->flush();
    }

    /**
     * Actualiza el último registro asociado al bloquéo del usuario provisto.
     *
     * @param User $user
     */
    public function unblockUser(User $user)
    {
        $lockedUserLog = $this->entityManager->getRepository('CoreCommonBundle:LockedUserLog')->findOneBy(
            array('lockUser' => $user),
            array('lockTimeStamp' => 'DESC')
        );

        if (null !== $lockedUserLog && true === $lockedUserLog->getLocked()) {
            $lockedUserLog->setLocked(false)
                ->setUnlockTimeStamp(new \DateTime())
                ->setUnlockUser($user);

            $this->entityManager->persist($lockedUserLog);
            $this->entityManager->flush();
        }
    }

    /**
     * Verifica si el usuario se encuentra o no bloqueado.
     *
     * @param User $user
     *
     * @return boolean
     */
    public function isUserBlocked(User $user)
    {
        $lockedUserLog = $this->entityManager->getRepository('CoreCommonBundle:LockedUserLog')->findOneBy(
            array('lockUser' => $user),
            array('lockTimeStamp' => 'DESC')
        );

        return null !== $lockedUserLog && $lockedUserLog->getLocked();
    }
}
