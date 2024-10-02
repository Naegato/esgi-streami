<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function login()
    {
        return $this->render('auth/login.html.twig');
    }

    #[Route('/register', name: 'register')]
    public function register()
    {
        return $this->render('auth/register.html.twig');
    }

    #[Route('/forgot', name: 'forgot_password')]
    public function forgotPassword()
    {
        return $this->render('auth/forgot.html.twig');
    }

    #[Route('/reset', name: 'reset_password')]
    public function resetPassword()
    {
        return $this->render('auth/reset.html.twig');
    }

    #[Route('/confirm', name: 'confirm')]
    public function confirm()
    {
        return $this->render('auth/confirm.html.twig');
    }
}