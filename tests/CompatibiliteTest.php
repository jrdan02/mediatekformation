<?php
namespace App\Tests; 

use Symfony\Component\Panther\PantherTestCase;

class CompatibiliteTest extends PantherTestCase{

    public function testCompatPageChrome(){
        $client = static::createPantherClient(['browser' => PantherTestCase::CHROME]);
        $resul = $client->request('GET', 'http://localhost:8000');
        $this->assertSelectorTextContains('h3', 'Bienvenue');
    }

    public function testCompatPageFirefox(){
        $client = static::createPantherClient(['browser' => PantherTestCase::FIREFOX]);
        $resul = $client->request('GET', 'http://localhost:8000');
        $this->assertSelectorTextContains('h3', 'Bienvenue');
    }

}
    