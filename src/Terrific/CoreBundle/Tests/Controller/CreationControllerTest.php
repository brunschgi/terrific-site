<?php

namespace Terrific\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CreationControllerTest extends WebTestCase
{
    public function testModule()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/terrific/creation/module');

        $this->assertTrue($crawler->filter('html:contains("Hello Remo")')->count() > 0);
    }
}
