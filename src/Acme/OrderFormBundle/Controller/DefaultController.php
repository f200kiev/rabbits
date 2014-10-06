<?php

namespace Acme\OrderFormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeOrderFormBundle:Default:index.html.twig', array('name' => $name));
    }
}
