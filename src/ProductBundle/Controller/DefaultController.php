<?php

namespace ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Document\User;

class DefaultController extends Controller {

    public function indexAction() {
        $product = new User();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($product);
        $dm->flush();

        return new Response('Created product id ' . $product->getId());
        return $this->render('ProductBundle:Default:index.html.twig');
    }

}
