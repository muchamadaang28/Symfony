<?php

namespace modulCRUD\Bundle\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function homeAction()
    {
        return $this->render('modulCRUDFrontendBundle:Page:home.html.twig', array(
                // ...
            ));    }

    public function aboutAction()
    {
        return $this->render('modulCRUDFrontendBundle:Page:about.html.twig', array(
                // ...
            ));    }

			
}
