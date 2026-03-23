<?php

namespace App\test\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class AccueilControllerTest extends WebTestCase{
        
        /**
         * testAccueilpage
         * test sur acces au login
         * @return void
         */
        public function testAccueilpage(){
            $client=static::createClient();
            $client->request('GET', '/');
            $this->assertResponseStatusCodeSame(Response::HTTP_OK);

        }
}