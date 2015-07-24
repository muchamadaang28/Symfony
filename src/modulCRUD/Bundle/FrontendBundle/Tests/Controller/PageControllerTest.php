<?php

namespace modulCRUD\Bundle\FrontendBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testHome()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/home');
    }

    public function testAbout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/about');
    }

}
