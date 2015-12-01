<?php

namespace Netik\floridaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('floridaBundle:Default:index.html.twig', array('name' => $name));
    }
}
