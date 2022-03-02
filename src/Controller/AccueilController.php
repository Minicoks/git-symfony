<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function indexAccueil(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'Accueil',
        ]);
    }

    #[Route('/PresentationProduit', name: 'presentationProduit', methods: ['GET'])]
    public function boulangerie(ProduitRepository $produitRepository): Response
    {
        return $this->render('prod/index.html.twig', [
            'controller_name' => 'Produit',
            'produits' => $produitRepository->findAll()
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

    #[Route('/profil', name: 'profil')]
    public function indexProfile(): Response
    {
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'Ton Profil',
        ]);
    }

}
