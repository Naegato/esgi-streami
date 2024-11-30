<?php

declare(strict_types=1);

namespace App\Controller\Auth;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function index(): Response
    {
        return $this->render('auth/login.html.twig');
    }

    #[Route('/register', name: 'register')]
    public function register(): Response
    {
        return $this->render('auth/register.html.twig');
    }

    #[Route('/forgot-password', name: 'forgot-password')]
    public function forgotPassword(): Response
    {
        return $this->render('auth/forgot.html.twig');
    }

    #[Route('/reset-password', name: 'reset-password')]
    public function resetPassword(): Response
    {
        return $this->render('auth/reset.html.twig');
    }

    #[Route('/confirm-email', name: 'confirm-email')]
    public function confirmEmail(): Response
    {
        return $this->render('auth/confirm.html.twig');
    }
}
