<?php 

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class PlaylistsControllerTest extends WebTestCase{
    
    /**
     * testFiltrePlaylist
     * flitre de playslist 
     * @return void
     */
    public function testFiltrePlaylist(){

          $client = static::createClient();
        $client->request('GET', '/playlists');
        $this->assertResponseIsSuccessful();

        $page = $client->submitForm('filtrer', [
            'recherche' =>'Eclipse et Java'
        ]);
        $this->assertSelectorTextContains('h5', 'Eclipse et Java');
    }
    
        
    /**
     * testTriPlaylist
     * tri de playlist retirn h5
     * @return void
     */
    public function testTriPlaylist(){
        $client = static::createClient();
         $client->request('GET', '/playlists/tri/name/ASC');{
         $this->assertSelectorTextContains('h5', 'Eclipse et Java');

         }

    }
    
    /**
     * testclikPlaylist
     * verification lien de playlists
     * @return void
     */
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