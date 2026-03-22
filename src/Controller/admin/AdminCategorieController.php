<?php 

namespace App\Controller\admin;
use App\Repository\FormationRepository;
use App\Repository\CategorieRepository;
use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;

 class AdminCategorieController extends AbstractController{

    /**
      * 
     * @var CategorieRepository
     */
     private $categorieRepository;
     /**
     * 
      * @var FormationRepository
      */
     private $formationRepository;

    /**
     * __construct
     * 
     * @param  mixed $formationRepository
      * @param  mixed $categorieRepository
     * @return void
     */
     function __construct(FormationRepository $formationRepository, CategorieRepository $categorieRepository) {
         $this->formationRepository = $formationRepository;
        $this->categorieRepository = $categorieRepository;
        }


     #[Route('/admin/categories', name: 'admin.categories')]

     public function index():Response{
        $categorie=$this->categorieRepository->findAll(); 
        return $this->render('admin/categories/index.html.twig', [
            'categories' => $categorie
        ]);
        }
        #[Route('/admin/categories/add', name: 'admin.categories.add', methods: ['POST'])]
        public function ajouterCategorie(Request $request): Response
        {
            if ($this->isCsrfTokenValid('categorie', $request->get('_token'))) {
                $name = $request->get('nom');
                $existingName = $this->categorieRepository->findAllForOneName($name);

                if (empty($existingName)) {
                    $categorie = new Categorie();
                    $categorie->setName($name);
                    $this->categorieRepository->add($categorie, true);
                } else {
                    $this->addFlash('Attention', 'imposible de ajoute il exite deja');
                }
            }

            return $this->redirectToRoute('admin.categories');
        }




       #[Route('/admin/categorie/suppr/{id}', name: 'admin.categorie.suppr')] 

       public function delete(Categorie $categorie){

       if($categorie->getFormations()->isEmpty()){
            $this->categorieRepository->remove($categorie); 
        }else{
              $this->addFlash('attention', 'la categorie est lie a formation');
        }
        return $this->redirectToRoute('admin.categories');
         

       }
        
     
        
 }
 
