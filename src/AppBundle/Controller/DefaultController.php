<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $list = $dm->getRepository("AppBundle:HandlerShippingEGMLog")->findAll();
        return $this->render('index.html.twig', array(
                    'list' => $list,
        ));
    }

}
