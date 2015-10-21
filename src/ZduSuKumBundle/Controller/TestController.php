<?php

namespace ZduSuKumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZduSuKumBundle:Test:index.html.twig', array());
    }
}
