<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{
    #[Route('/category', name: 'category')]
    public function category()
    {
        return $this->render('movie/category.html.twig');
    }

    #[Route('/detail_serie', name: 'detail_serie')]
    public function detailSerie()
    {
        return $this->render('movie/detail_serie.html.twig');
    }

    #[Route('/detail', name: 'detail')]
    public function detail()
    {
        return $this->render('movie/detail.html.twig');
    }

    #[Route('/list', name: 'list')]
    public function list()
    {
        return $this->render('movie/list.html.twig');
    }

    #[Route('/discover', name: 'discover')]
    public function discover()
    {
        return $this->render('movie/discover.html.twig');
    }
}
  