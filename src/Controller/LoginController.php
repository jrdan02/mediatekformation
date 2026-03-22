<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends  AbstractController {

 
    #[Route('/login' , name:'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response{

        $erreur=$authenticationUtils->getLastAuthenticationError(); 

        $lastname=$authenticationUtils->getLastUsername();

             return $this->render('login/index.html.twig', [
                'last_username' => $lastname    ,
                    'error' => $erreur
        ]);
    }


            #[Route('/logout', name:'logout')]
            public function logout(){


                
            }
}


    


