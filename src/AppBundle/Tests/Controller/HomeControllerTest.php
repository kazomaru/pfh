<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    public function testVideo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

}
