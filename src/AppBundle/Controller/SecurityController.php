<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controlador para el manejo de seguridad de la aplicación.
 */
class SecurityController extends Controller
{

    /**
     * @param Request $request
     *
     * @return Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        $lastUsername = $authenticationUtils->getLastUsername();
        $errorMessage = $request->getSession()->get('authentication_error_message');
        $uri = $request->getSession()->get('reference');
        if (null !== $errorMessage)
        {
            if ($uri == null)
            {
                if (isset($_SESSION['_sf2_attributes']['_security.default.target_path']))
                {
                    $uri = $_SESSION['_sf2_attributes']['_security.default.target_path'];
                    $request->getSession()->set('reference', $uri);
                }
            }
            $request->getSession()->clear();
            $request->getSession()->set('reference', $uri);
        }

        return $this->render('Security/login.html.twig', array(
                    'last_username' => $lastUsername,
                    'error_message' => $errorMessage
        ));
    }

}
