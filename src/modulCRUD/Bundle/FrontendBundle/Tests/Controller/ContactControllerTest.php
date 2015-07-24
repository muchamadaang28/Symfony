<?php

namespace modulCRUD\Bundle\FrontendBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactControllerTest extends WebTestCase
{
    public function testContactus()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ContactUs');
    }

    public function testSendusmessage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/SendUsMessage');
    }

}
