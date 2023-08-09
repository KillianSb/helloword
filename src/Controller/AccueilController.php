<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Controller Accueil!',
            'path' => 'src/Controller/AccueilController.php',
        ]);
    }
}
