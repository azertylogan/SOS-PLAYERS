<?php

namespace PPE\SOSPLAYERBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PPESOSPLAYERBundle:Default:index.html.twig');
    }
}
