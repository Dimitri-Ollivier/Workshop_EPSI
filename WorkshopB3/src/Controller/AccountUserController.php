<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountUserController extends AbstractController
{
    #[Route('/account/user', name: 'account_user')]
    public function index(): Response
    {
        return $this->render('account_user/index.html.twig', [
            'controller_name' => 'AccountUserController',
        ]);
    }
}
