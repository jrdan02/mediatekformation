<?php

namespace App\Controller\admin; 

use App\Entity\Formation;
    use App\Repository\CategorieRepository;
    use App\Repository\FormationRepository;
    use App\Form\FormationType;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class AdminformationController  extends AbstractController {


        /**
         * 
         * @var FormationRepository
         */
        private $formationRepository;

        /**
         * 
         * @var CategorieRepository
         */
        private $categorieRepository;
        
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


        
        #[Route('/admin/formation', name: 'admin.formation')]
        
        /**
         * index de la page formation 
        *
        * @param  mixed $formationRepository
        * @param  mixed $categorieRepository
        * @return Response
        */
        public function index():Response{
            
        $formation=$this->formationRepository->findAll(); 
            $categorie= $this->categorieRepository->findAll();
            return $this->render('admin/formation/index.html.twig', [
                        'formations' => $formation,
                        'categories' => $categorie

                    ]);
        }

    
        
        /**
         * retorun le tri des chaps ,ordre , table 
         *
         * @param  mixed $champ
         * @param  mixed $ordre
         * @param  mixed $table
         * @return Response
         */
        #[Route('/admin/formation/index/tri/{champ}/{ordre}/{table}',  name: 'admin.formation.sort')]
        public function sort( Request $request, $champ, $ordre, $table = ""): Response {
            if($this->isCsrfTokenValid('filtre_' . $champ, $request->get('_token'))) {
            $formations = $this->formationRepository->findAllOrderBy($champ, $ordre, $table);
            $categories = $this->categorieRepository->findAll();
            return $this->render('admin/formation/index.html.twig', [
                        'formations' => $formations,
                        'categories' => $categories
            ]);
            }
            return $this->redirectToRoute('admin.formation'); 
        }

        
        
        #[Route('/admin/formation/index/recherche/{champ}/{table}', name: 'admin.formation.findAllContain')]        
        /**
         * findAllContain
         * rechecher du fible par 
         * @param  mixed $champ
         * @param  mixed $request
         * @param  mixed $table
         * @return Response
         */
        public function findAllContain($champ, Request $request, $table = ""): Response {
            if($this->isCsrfTokenValid('filtre_' . $champ, $request->get('_token'))) {

            
            $valeur = $request->get("recherche");
            $formations = $this->formationRepository->findByContainValue($champ, $valeur, $table);
            $categories = $this->categorieRepository->findAll();
            return $this->render('admin/formation/index.html.twig', [
                'formations' => $formations,
                'categories' => $categories,
                'valeur'     => $valeur,
                'table'      => $table
            ]);
          }
          return $this->redirectToRoute('admin.formation'); 
        }

        
        #[Route('/admin/formation/edit/{id}', name: 'admin.formation.edit')]        
        /**
         *  modifecation par id. 
         *
         * @param  mixed $id
         * @param  mixed $formationRepository
         * @param  mixed $request
         * @return Response
         */
        public function edit(int $id , FormationRepository $formationRepository, Request $request):Response{
            $formation=$formationRepository->find($id);

            $formformation=$this->createForm(FormationType::class, $formation);
            $formformation->handleRequest($request);
            if($formformation->isSubmitted() && $formformation->isValid()){
                $formationRepository->add($formation);
                return $this->redirectToRoute('admin.formation');
            }
            return $this->render('admin/formation/formation.edit.html.twig',[
                'formformation'=>$formformation->createView(),
                'formation'=>$formation
            ]);
        }

        #[Route('/admin/formation/add', name: 'admin.formation.add')]
         public function ajouterformation(Request $request):Response{
             $formation = new Formation();
        $formFormation = $this->createForm(FormationType::class, $formation);
        
        $formFormation->handleRequest($request);
        if($formFormation->isSubmitted() && $formFormation->isValid()) {
            $this->formationRepository->add($formation, true);
            return $this->redirectToRoute('admin.formation');
        }
        
        return $this->render("admin/formation/formation.add.html.twig", [
            'formation' => $formation,
            'formformation' => $formFormation->createView()
        ]);
    }
    #[Route('/admin/formation.suppr/{id}', name: 'admin.formation.suppr')]        
        /**
         * suupier d'un formation 
         *
         * @param  mixed $id
         * @return Response
         */
        public function delete(int $id) :Response{

            $formation= $this->formationRepository->find($id);

            if($formation){
                $this->formationRepository->remove($formation);
            }
            return $this->redirectToRoute("admin.formation");
            
        }
            
    
    }




        











     
    
        

       






        


        


        

    
        

        

        


    



