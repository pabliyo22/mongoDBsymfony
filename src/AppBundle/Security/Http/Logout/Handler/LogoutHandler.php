<?php

namespace AppBundle\Security\Http\Logout\Handler;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;

/**
 * Manejador de eventos de cierre de sesión.
 */
class LogoutHandler implements LogoutSuccessHandlerInterface
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @var Router
     */
    private $router;

    /**
     * @var SecurityContext
     */
    private $securityContext;

    const LOGOUT_DEFAULT_ROUTE = 'login_route';


    /**
     * @param EntityManager $entityManager
     * @param Router $router
     * @param SecurityContext $securityContext
     */
    public function __construct(EntityManager $entityManager, Router $router, SecurityContext $securityContext)
    {
        $this->entityManager = $entityManager;
        $this->router = $router;
        $this->securityContext = $securityContext;
    }

    /**
     * {@inheritDoc}
     */
    public function onLogoutSuccess(Request $request)
    {
        if(is_null($this->securityContext->getToken())){
            return new RedirectResponse($this->router->generate(self::LOGOUT_DEFAULT_ROUTE));
        }
        
//        $user = $this->securityContext->getToken()->getUser();
//        $userLastSessionLog = $this->entityManager->getRepository('CoreCommonBundle:SessionLog')->findOneBy(
//            array('users' => $user),
//            array('timeStampIn' => 'DESC')
//        );
//
//        if (null !== $userLastSessionLog) {
//            $userLastSessionLog->setTimeStampOut(new \DateTime());
//
//            $this->entityManager->persist($userLastSessionLog);
//            $this->entityManager->flush();
//        }

        return new RedirectResponse($this->router->generate(self::LOGOUT_DEFAULT_ROUTE));
    }
}
