<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateurController extends AbstractController
{
    /**
     * @Route("/utilisateur", name="app_utilisateur")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $utilisateurs = $doctrine->getRepository(Utilisateur::class)->findAll();

        return $this->render('utilisateur/index.html.twig', [
            'utilisateur' => $utilisateurs
        ]);
    }
}
