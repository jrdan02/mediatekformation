<?php 

namespace App\Tests\Repository; 
use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CategorieRepositoryTest extends KernelTestCase{

    public function getRepository(){
        self::bootKernel(); 
        $repository = self::getContainer()->get(CategorieRepository::class);
        return $repository;
    }

     public function testfindAllForOneName(){
        $repository = $this->getRepository();
        $categorie = $repository->findAllForOneName('Java'); 
        $this->assertEquals('Java', $categorie[0]->getName());
    }

}