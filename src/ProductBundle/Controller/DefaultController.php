<?php

namespace ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Document\User;
use AppBundle\Document\DailyResume;
use AppBundle\Document\Counters;
use AppBundle\Document\HandlerShippingEGMLog;
use ProductBundle\Form\Type\ProductType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction() {

        $dm = $this->get('doctrine_mongodb')->getManager();
        $users = $dm->getRepository("AppBundle:User")->findAll();
        foreach ($users as $key => $user) {
            $data['name'] = $user->getName();
            $data['price'] = $user->getPrice();
            $data['value'] = rand(2017, 12334242);
            $usersA['users'][] = $data;
        }

        return new JsonResponse(array('users' => $usersA));
    }

    public function createCounter() {
        $Counters = new Counters();
        $Counters->setCi(rand(100, 1000));
        $Counters->setCo(rand(100, 1000));
        $Counters->setJj(rand(100, 1000));
        $Counters->setJp(rand(100, 1000));
        $Counters->setDateSeqEnd(rand(100, 1000));
        $Counters->setDateSeqStart(rand(100, 1000));

        return $Counters;
    }

    public function insertEGMship() {

        for ($index = 0; $index < 1; $index++) {
            $shipLog = new HandlerShippingEGMLog();
            $shipLog->setAccountingDate(rand(1000, 40000));
            $shipLog->setSendDate(rand(1000, 40000));

            $shipLog->setWinDay(rand(1000, 40000));
            for ($index = 0; $index < 10; $index++) {
                $shipEGM = new DailyResume();
                $shipEGM->setNroPres(1);
                $shipEGM->setNroSec(1);
                $shipEGM->addFirstCounter($this->createCounter());
                $shipEGM->addLastCounter($this->createCounter());
                $shipEGM->setDenomEGM(rand(0.50, 1.25));
                $shipEGM->setEgm(rand(10000, 11000));
                //$shipEGM->setState($this->statePending);
                $shipEGM->setNroPres(1);
                $shipEGM->setWin(rand(-50, 10000));
                $shipLog->addEGMShipping($shipEGM);
            }
        }

        return $shipLog;
    }

    public function listDetailAction(Request $request) {

        $dm = $this->get('doctrine_mongodb')->getManager();

        $detail = $dm->getRepository("AppBundle:HandlerShippingEGMLog")->find($request->request->get('id'));
        return $this->render('ProductBundle:Default:list.html.twig', array(
                    'list' => $detail->getEGMShipping(),
        ));
    }

    public function addAction() {

        $list = $this->insertEGMship();
        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($list);

        //
        $usersA['id'] = $list->getId();
        $usersA['sendDate'] = $list->getSendDate();
        $usersA['accountingDate'] = $list->getAccountingDate();
        $usersA['user'] = $list->getUser();
        $usersA['winday'] = $list->getWinDay();
        $dm->flush($list);
        return new JsonResponse($usersA);
    }

}
