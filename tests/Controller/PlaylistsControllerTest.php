<?php 

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class PlaylistsControllerTest extends WebTestCase{

    public function testFiltrePlaylist(){

          $client = static::createClient();
        $client->request('GET', '/playlists');
        $this->assertResponseIsSuccessful();

        $page = $client->submitForm('filtrer', [
            'recherche' =>'Eclipse et Java'
        ]);
        $this->assertSelectorTextContains('h5', 'Eclipse et Java');
    }
    
    
    public function testTriPlaylist(){
        $client = static::createClient();
         $client->request('GET', '/playlists/tri/name/ASC');{
         $this->assertSelectorTextContains('h5', 'Eclipse et Java');

         }

    }

    public function testclikPlaylist(){
        $client = static::createClient(); 
        $client->request('GET', '/playlists');
        $client->clickLink('Voir détail');
        
        $resp = $client->getResponse();
        $this->assertEquals(Response::HTTP_OK, $resp->getStatusCode());

        $url = $client->getRequest()->server->get("REQUEST_URI");
        $this->assertEquals('/playlists/playlist/1', $url);
        
        $this->assertSelectorTextContains('h4', 'Eclipse et Java');
    }


 
}