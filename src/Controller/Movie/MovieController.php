<?php

declare(strict_types=1);

namespace App\Controller\Movie;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{
    #[Route('/movie/{id}', name: 'movie_detail')]
    public function detail(): Response
    {
        return $this->render('movie/detail.html.twig');
    }

    #[Route('/serie/{id}', name: 'serie_detail')]
    public function serieDetail(): Response
    {
        return $this->render('movie/detail_serie.html.twig');
    }
}
