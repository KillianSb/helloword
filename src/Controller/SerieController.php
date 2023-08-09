<?php

namespace App\Controller;

use App\Repository\SerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/blog', name : 'serie')]
class SerieController extends AbstractController
{
    #[Route(
        '/series',
        name: '_liste'
    )]
    public function liste(
        SerieRepository $serieRepository
    ): Response
    {
        $series = $serieRepository->findAll();
        return $this->render(
            'serie/liste.html.twig',
            compact('series')
        );
    }

    #[Route(
        '/serie/{id}',
        name: '_detail',
        requirements: ["id" => "\d+"]
    )]
    public function detail(
        SerieRepository $serieRepository,
        int $id = 50
    ): Response
    {
        dump($id);

        $serie = $serieRepository->findOneBy(
            ["id" => $id]
        );

        return $this->render(
            'serie/detail.html.twig',
            compact('serie')
        );
    }
}
