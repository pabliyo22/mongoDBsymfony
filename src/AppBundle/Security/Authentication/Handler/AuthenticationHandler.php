<?php

namespace AppBundle\Security\Authentication\Handler;

use AppBundle\Security\Authentication\Manager\LockedUserLogManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Translation\Translator;

/**
 * Manejador de eventos de autenticación.
 */
class AuthenticationHandler implements AuthenticationFailureHandlerInterface, AuthenticationSuccessHandlerInterface {

    /**
     * @var AuthenticationUtils
     */
    private $authenticationUtils;

    /**
     * @var Router
     */
    private $router;

    /**
     * @var Translator
     */
    private $translator;

    // Rutas de la aplicación.
    const AUTHENTICATION_FAILURE_ROUTE = 'login_route';
    const AUTHENTICATION_SUCCESS_ROUTE = 'main_index';

    /**

     * @param AuthenticationUtils $authenticationUtils
     * @param LockedUserLogManager $lockedUserLogManager
     * @param Router $router
     * @param TranslatorInterface $translator
     */
    public function __construct(AuthenticationUtils $authenticationUtils, Router $router, Translator $translator) {

        $this->authenticationUtils = $authenticationUtils;

        $this->router = $router;
        $this->translator = $translator;
    }

    /**
     * {@inheritDoc}
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception) {
        $errorMessage = $this->translator->trans('security.authentication.invalid_credentials');


        if (isset($_SESSION['_sf2_attributes']['_security.default.target_path'])) {
            $uri = $_SESSION['_sf2_attributes']['_security.default.target_path'];
            $request->getSession()->set('reference', $uri);
        }

        return $this->redirectResponse($request, $errorMessage, null);
    }

    /**
     * {@inheritDoc}
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {
        $errorMessage = null;

        if (isset($_SESSION['_sf2_attributes']['_security.default.target_path'])) {
            $uri = $_SESSION['_sf2_attributes']['_security.default.target_path'];
            $request->getSession()->set('reference', $uri);
        }
        return $this->redirectResponse($request, $errorMessage, null);
    }

    /**
     * Establece el mensaje de bloquéo de usuario en sesión en caso de recibir un objeto {Request} por parámetro y
     * retorna un objeto {RedirectResponse} para redireccionar según la ruta provista.
     *
     * @param Request $request|null
     * @param integer $userBlockInterval|null
     * @param string $route
     *
     * @return RedirectResponse
     */
    private function redirectResponse(Request $request, $errorMessage, $userBlockInterval = null) {
        $uri = null;
        if ($errorMessage) {

            $request->getSession()->set('authentication_error_message', $errorMessage);
            $path = self::AUTHENTICATION_FAILURE_ROUTE;
            $uri = $this->router->generate($path);
        } elseif ($request->getSession()->get('reference') !== null) {
            $uri = $request->getSession()->get('reference');
        }
        if (!$uri) {
            $uri = self::AUTHENTICATION_SUCCESS_ROUTE;
            $uri = $this->router->generate($uri);
        }
        return new RedirectResponse($uri);
    }

}
