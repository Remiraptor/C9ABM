<?php

namespace abm\EvenementsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('abmEvenementsBundle:Default:index.html.twig', array('name' => $name));
    }
}
