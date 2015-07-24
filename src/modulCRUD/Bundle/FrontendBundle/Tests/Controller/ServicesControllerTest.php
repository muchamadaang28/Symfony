<?php

namespace modulCRUD\Bundle\FrontendBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ServicesControllerTest extends WebTestCase
{
    public function testItconsultancy()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ITConsultancy');
    }

    public function testItservices()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ITServices');
    }

}
