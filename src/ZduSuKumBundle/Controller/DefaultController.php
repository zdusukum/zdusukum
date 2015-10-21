<?php

namespace ZduSuKumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZduSuKumBundle:Default:index.html.twig', array());
    }
}
