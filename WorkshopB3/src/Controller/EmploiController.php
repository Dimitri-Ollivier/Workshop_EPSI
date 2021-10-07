<?php

namespace App\Controller;

use App\Entity\Emploi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmploiController extends AbstractController
{
    #[Route('/emploi', name: 'emploi')]
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Emploi::class);

        $emplois = $repo->findAll();

        return $this->render('emploi/index.html.twig', [
            'controller_name' => 'EmploiController',
            'emplois' => $emplois
        ]);
    }
}
