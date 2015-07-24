<?php

namespace modulCRUD\Bundle\FrontendBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BusinessPartnerControllerTest extends WebTestCase
{
    public function testPartner()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Partner');
    }

    public function testTestimonies()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Testimonies');
    }

}
