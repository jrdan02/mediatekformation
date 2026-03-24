<?php 

namespace App\test; 

use App\Entity\Formation; 

use PHPUnit\Framework\TestCase;

class FormationTest extends TestCase{

 
 /**
  * testGetPublishedAtString
  * test de la format date 
  * @return void
  */
 public function testGetPublishedAtString() {

    $formation= new Formation(); 
    $formation->setPublishedAt(new \DateTime("2026-04-12.17:00:12")); 
    $this->assertEquals("12/04/2026", $formation->getPublishedAtString());
 }
 }