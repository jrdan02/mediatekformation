<?php 

namespace App\tests\Validations;

use App\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Validator\Validator\ValidatorInterface; 

class FormationValidationsTest extends KernelTestCase{

      public function formation():Formation{
        $formation= new formation(); 
        $formation->setTitle('test valide');
        $formation->setDescription('test de validation');
        $formation->setVideoId('dkdkkend11');
        return $formation;

      }

    

    public function testvalidformation(){
        self::bootKernel(); 
        $valide=static::getContainer()->get(ValidatorInterface::class);
        $formation=$this->formation();
        $formation->setPublishedAt(new \DateTime("2026-04-12 18:00:12"));
        $errors = $valide->validate($formation);

        $this->assertGreaterThan(0, count($errors));

    }
}