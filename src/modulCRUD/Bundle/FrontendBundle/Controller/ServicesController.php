<?php

namespace modulCRUD\Bundle\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServicesController extends Controller
{
    public function ITConsultancyAction()
    {
        return $this->render('modulCRUDFrontendBundle:Services:ITConsultancy.html.twig', array(
                // ...
            ));    }

    public function ITServicesAction()
    {
        return $this->render('modulCRUDFrontendBundle:Services:ITServices.html.twig', array(
                // ...
            ));    }

}
