<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function indexAccueil(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'Accueil',
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function indexContact(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'Contact',
        ]);
    }

    #[Route('/mentions', name: 'mentions')]
    public function indexMentions(): Response
    {
        return $this->render('mentions/index.html.twig', [
            'controller_name' => 'Mentions Légales',
        ]);
    }
}
