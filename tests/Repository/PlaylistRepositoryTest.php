<?php 

namespace App\Tests\Repository; 

use App\Entity\Formation;
use App\Entity\Playlist;
use App\Repository\PlaylistRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase; 

class PlaylistRepositoryTest extends KernelTestCase{


    public function getRepository(){
        self::bootKernel(); 
        $repository = self::getContainer()->get(PlaylistRepository::class);
        return $repository;
    }

    public function testfindAllOrderByNbFormation(){
        $repository=$this->getRepository(); 
        $playlist=$repository->findAllOrderByNbFormation('ASC'); 
        $this->assertEquals('3',$playlist[0]->getId()); 
    }
    
}