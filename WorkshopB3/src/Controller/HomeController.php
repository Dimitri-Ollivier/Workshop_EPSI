<?php

namespace App\Controller;

use App\Entity\Emploi;
use App\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Emploi::class);

        $emplois = $repo->findAll();

        $repo = $this->getDoctrine()->getRepository(Evenement::class);

        $events = $repo->findAll();

        return $this->render('home/HomePage.html.twig', [
            'controller_name' => 'HomeController',
            'emplois' => $emplois,
            'events' => $events
        ]);
    }
}
