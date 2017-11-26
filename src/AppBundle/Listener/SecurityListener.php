<?php

namespace AppBundle\Listener;

//use Doctrine\ORM\EntityManager;
// use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class SecurityListener {

    protected $url;
    protected $dispatcher;
    protected $security;
    protected $em;
    protected $router;
    protected $globalParameter;
    protected $params;

    public function __construct(SecurityContextInterface $security, $dispatcher, $router, $globalParameter) {
        $this->security = $security;
        $this->dispatcher = $dispatcher;
        //  $dm = $this->get('doctrine_mongodb')->getManager();
        //  $this->em = $entityManager;
        $this->router = $router;
        $this->globalParameter = $globalParameter;
        $this->url = '';
        $this->params = '';
        //lleva el contentido a donde sera redirido el usuario
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event) {

        $this->passwordChange($event);
    }

    /**
     * Funcion llamada para comprobar si el usuario necesita cambiar la contraseña en el proximo loginf
     * ademas si es resultado es true se encarga de asiganarle a la prodiedad "$dispatcher" donde sera la url que
     * se redigirada
     * @return true o false
     */
    private function passwordChange() {
        $user = $this->security->getToken()->getUser();

        /*
         * se fuerza el cambio de la contraseña al superar x cantidad de dias
         */
        $passwordLifetime = $this->globalParameter->findParameterValueByName('password_lifetime');

        $dDiff = $user->getLastPasswordChange()->diff(new \DateTime());
        $dDiff->format('%R');

        /*
         * Si posee password reset o se vencio la contraseña se pide el cambio de la misma.
         */
        if (!$user->getIsActive()) {
            return false;
        }
        if ($user->getPasswordReset() && $passwordLifetime < $dDiff->days) {
            //esta linea invoca a la funcion "redirectResponse" para redirijir a la pagina a donde me plazca
            $this->dispatcher->addListener(KernelEvents::RESPONSE, array($this, 'redirectResponse'));
            $this->url = 'force_change_password_user';
            $this->params = array('ref' => 'force');
            return true;
        } else {
            return false;
        }
    }

    /**
     * Funcion que le asigna al la propiedada Router donde va redidigirse al usuario
     *
     * @return void
     */
    public function redirectResponse(FilterResponseEvent $event) {
        $event->getResponse()->headers->set('Location', $this->router->generate($this->url, $this->params));
    }

}
