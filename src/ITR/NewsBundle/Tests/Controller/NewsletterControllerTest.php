<?php

namespace ITR\NewsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NewsletterControllerTest extends WebTestCase
{
    public function testSend()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/send');
    }

}
