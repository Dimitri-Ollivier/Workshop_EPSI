<?php

namespace App\Controller;

use App\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    #[Route('/event', name: 'event')]
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Evenement::class);

        $events = $repo->findAll();

        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
            'events' => $events
        ]);
    }
}
