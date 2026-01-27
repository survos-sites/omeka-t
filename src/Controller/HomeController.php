<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Twig\Environment;

class HomeController
{
    #[Route('/', name: 'home')]
    public function index(Environment $twig): Response
    {
        return new Response($twig->render('home.html.twig', [
            'title' => 'Omeka T',
            'message' => 'Symfony is now handling /. Legacy remains available on its original routes.',
            'legacyRoute' => '/legacy',
        ]));
    }
}
