<?php 

namespace App\Controller\admin;
use App\Entity\Playlist;
use App\Repository\CategorieRepository;
use App\Repository\FormationRepository;
use App\Repository\PlaylistRepository;
use App\Form\PlaylistType; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;


 class AdminplaylistsController extends  AbstractController{
    
    /**
     * formationRepository
     *
     * @var mixed
     */
    private $formationRepository;
    
    /**
     * categorieRepository
     *
     * @var mixed
     */
    private $categorieRepository;
    
    /**
     * playlistRespository
     *
     * @var mixed
     */
    private $playlistRespository;

    
    /**
     * __construct
     *
     * @param  mixed $formationRepository
     * @param  mixed $categorieRepository
     * @param  mixed $playlistRespository
     * @return void
     */
    function __construct(FormationRepository $formationRepository, CategorieRepository $categorieRepository, PlaylistRepository $playlistRespository)
    {
         $this->formationRepository = $formationRepository;
        $this->categorieRepository = $categorieRepository;
        $this->playlistRespository=$playlistRespository;
        
    }


    #[Route('admin/playlist', name:'admin.playlist')]

    public function index():Response{
        $playlists=$this->playlistRespository->findAllOrderByName('ASC');

        $categorie=$this->categorieRepository->findAll();
         return $this->render('admin/playlists/index.html.twig', [
                        'playlists' => $playlists,
                        'categories' => $categorie

                    ]);
    }

    #[Route('/admin/playlists/index/tri/{champ}/{ordre}/{table}',  name: 'admin.playlist.sort')]

    public function sort( Request $request, $champ, $ordre, $table = ""): Response {
     
            switch($champ){
                   case 'name': 
                    $playlists = $this->playlistRespository->findAllOrderByName($ordre);
                break;
                case "nbformations":
                $playlists= $this->playlistRespository->findAllOrderByNbFormation($ordre);
                break;
            default:
                $playlists=$this->playlistRespository->find('ASC');
                break;  
                 }

            
            $categories = $this->categorieRepository->findAll();
        return $this->render("admin/playlists/index.html.twig", [
             'playlists' => $playlists,
            'categories' => $categories
        ]);
        }
    
             
     #[Route('/admin/playlists/index/recherche/{champ}/{table}', name: 'admin.playlists.findallcontain')]
     public function findAllContain($champ, Request $request, $table=""): Response{
        if ($this->isCsrfTokenValid('filtre_' . $champ, $request->get('_token'))) {
            $valeur = $request->get("recherche");
            $playlists = $this->playlistRespository->findByContainValue($champ, $valeur, $table);
            $categories = $this->categorieRepository->findAll();
            return $this->render('admin/playlists/index.html.twig', [
                        'playlists' => $playlists,
                        'categories' => $categories,
                        'valeur' => $valeur,
                        'table' => $table
            ]);
        }
        return $this->redirectToRoute('admin.playlist');
    }

     #[Route('/admin/playlist/edit/{id}', name: 'admin.playlist.edit')]
     
     public function edit(int $id , Request $request):Response{
        $playlist=$this->playlistRespository->find($id); 

        $formplaylist=$this->createForm(PlaylistType::class, $playlist); 
         $formplaylist->handleRequest($request);
        if($formplaylist->isSubmitted()&& $formplaylist->isValid()){
            $this->playlistRespository->add($playlist, true);
            return $this->redirectToRoute('admin.playlist');
        }
         return $this->render("admin/playlists/playlist.edit.html.twig", [
            'playlist' => $playlist,
            'formplaylist' => $formplaylist->createView()
        ]);

    }
    
    #[Route('/admin/playlist/add', name: 'admin.playlist.add')]
     public function ajouterplaylist(Request $request):Response{
        $playlist= new Playlist();
        $formplaylist=$this->createForm(PlaylistType::class, $playlist); 

        $formplaylist->handleRequest($request);
        if($formplaylist->isSubmitted()&& $formplaylist->isValid()){
            $this->playlistRespository->add($playlist, true);
            return $this->redirectToRoute('admin.playlist');
        }
         return $this->render("admin/playlists/playlist.add.html.twig", [
            'playlist' => $playlist,
            'formplaylist' => $formplaylist->createView()

        ]);
     }


    


    
    #[Route('/admin/playlist/suppr/{id}', name: 'admin.playlist.suppr')]
        public function delete(Playlist $playlist): Response {
         $formationRata = $this->formationRepository->findAllForOnePlaylist($playlist->getId()); 

         if(count($formationRata) > 0) {
         $this->addFlash('Attension', 'impossible de supprimer car liée à une formation');
         } else {
            $this->playlistRespository->remove($playlist, true);
         }
         return $this->redirectToRoute('admin.playlist');
    }

                    

    

 }  


        


 