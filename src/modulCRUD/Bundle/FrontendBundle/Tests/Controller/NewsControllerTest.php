<?php

namespace modulCRUD\Bundle\FrontendBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NewsControllerTest extends WebTestCase
{
    public function testLatestnews()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/latestNews');
    }

    public function testPressrelease()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/PressRelease');
    }

}
