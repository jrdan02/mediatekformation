<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class FormationsControllerTest extends WebTestCase {


   

    
    /**
     * testTriFormation
     *
     * @return void
     */
    public function testTriFormation(){
        $client = static::createClient(); 
        $client = $client->request('GET', '/formations/tri/title/ASC');

       $this->assertSelectorTextContains('h5','Android Studio (complément n°13) : Permissions');

       
    }
    
    /**
     * testFiltreFormation
     *tri la formaton
     * @return void
     */
    public function testFiltreFormation(){
        $client = static::createClient();
        $client->request('GET', '/formations');

        $this->assertResponseIsSuccessful();

        $page = $client->submitForm('filtrer', [
            'recherche' => 'Tests unitaires'
        ]);

    
        $this->assertSelectorTextContains('h5', 'Tests unitaires');
    }
    
    /**
     * testcliklinformation
     *
     * @return void
     */
    public function  testcliklinformation(){
          $client = static::createClient(); 
         $client->request('GET', '/formations');
         $client->clickLink('image namature formation');

         $resp=$client->getResponse();

        $this->assertEquals(Response::HTTP_OK, $resp->getStatusCode());

        $url=$client->getRequest()->server->get("REQUEST_URI");
        $this->assertEquals('/formations/formation/1', $url);
         $this->assertSelectorTextContains('h4',  'Eclipse n°8 : Déploiement');

    }


}
