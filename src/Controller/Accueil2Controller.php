<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Accueil2Controller extends AbstractController
{
    #[Route('/accueil2', name: 'accueil2_index')]
    public function index(): Response
    {
        $nom = "Bertrand";
        $age = rand(10,90);

        return $this->render(
            'accueil2/index.html.twig',
            compact('nom', 'age')
        );
    }
}
