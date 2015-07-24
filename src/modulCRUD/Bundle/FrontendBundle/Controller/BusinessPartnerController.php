<?php

namespace modulCRUD\Bundle\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BusinessPartnerController extends Controller
{
    public function PartnerAction()
    {
        return $this->render('modulCRUDFrontendBundle:BusinessPartner:Partner.html.twig', array(
                // ...
            ));    }

    public function TestimoniesAction()
    {
        return $this->render('modulCRUDFrontendBundle:BusinessPartner:Testimonies.html.twig', array(
                // ...
            ));    }

}
