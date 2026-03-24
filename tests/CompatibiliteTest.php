<?php
namespace App\Tests; 

use Symfony\Component\Panther\PantherTestCase;

class CompatibiliteTest extends PantherTestCase{
    
    /**
     * testCompatPageChrome
     * verification de  compatiblite
     * @return void
     */
    public function testCompatPageChrome(){
        $client = static::createPantherClient(['browser' => PantherTestCase::CHROME]);
        $resul = $client->request('GET', 'http://localhost:8000');
        $this->assertSelectorTextContains('h3', 'Bienvenue');
    }
    
    /**
     * testCompatPageFirefox
     * verification de 
     * @return void
     */
    public function testCompatPageFirefox(){
        $client = static::createPantherClient(['browser' => PantherTestCase::FIREFOX]);
        $resul = $client->request('GET', 'http://localhost:8000');
        $this->assertSelectorTextContains('h3', 'Bienvenue');
    }

}
    