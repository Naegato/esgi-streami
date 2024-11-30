<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController
{
    #[Route('/admin')]
    public function index(): Response
    {
        return $this->render('admin/admin.html.twig');
    }

    #[Route('/admin/users')]
    public function users(): Response
    {
        return $this->render('admin/admin_users.html.twig');
    }

    #[Route('/admin/movies')]
    public function movies(): Response
    {
        return $this->render('admin/admin_movies.html.twig');
    }

    #[Route('/admin/movies/add')]
    public function addMovie(): Response
    {
        return $this->render('admin/admin_add_movies.html.twig');
    }
}
