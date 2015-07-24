<?php

namespace modulCRUD\Bundle\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function ContactUsAction()
    {
        return $this->render('modulCRUDFrontendBundle:Contact:ContactUs.html.twig', array(
                // ...
            ));    }

    public function SendUsMessageAction()
    {
        return $this->render('modulCRUDFrontendBundle:Contact:SendUsMessage.html.twig', array(
                // ...
            ));    }

}
