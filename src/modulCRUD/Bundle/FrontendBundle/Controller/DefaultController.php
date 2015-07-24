<?php

namespace modulCRUD\Bundle\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('modulCRUDFrontendBundle:Default:index.html.twig', array('name' => $name));
    }
}
