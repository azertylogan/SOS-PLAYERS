<?php

namespace PPE\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InscriptionController extends Controller
{
    public function indexAction()
    {
        return $this->render('PPEAccueilBundle:Default:index.html.twig');
    }
}

