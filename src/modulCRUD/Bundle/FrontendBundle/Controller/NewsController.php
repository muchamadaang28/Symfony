<?php

namespace modulCRUD\Bundle\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function latestNewsAction()
    {
        return $this->render('modulCRUDFrontendBundle:News:latestNews.html.twig', array(
                // ...
            ));    }

    public function PressReleaseAction()
    {
        return $this->render('modulCRUDFrontendBundle:News:PressRelease.html.twig', array(
                // ...
            ));    }

	public function CSRProgramAction()
    {
        return $this->render('modulCRUDFrontendBundle:News:CSRProgram.html.twig', array(
                // ...
            ));    }
			
}
