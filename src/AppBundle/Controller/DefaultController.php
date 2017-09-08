<?php

namespace AppBundle\Controller;


use AppBundle\Model\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {

        $users = User::all();
        //dump($users);
        return $this->render('default/index.html.twig', array(
           
                    'users' => $users ,
        ));
    }

}
