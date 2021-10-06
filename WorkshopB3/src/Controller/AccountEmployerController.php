<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountEmployerController extends AbstractController
{
    #[Route('/account/employer', name: 'account_employer')]
    public function index(): Response
    {
        return $this->render('account_employer/index.html.twig', [
            'controller_name' => 'AccountEmployerController',
        ]);
    }
}
