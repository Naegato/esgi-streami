<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class OtherController extends AbstractController
{
    #[Route('/upload', name: 'other')]
    public function other()
    {
        return $this->render('other/upload.html.twig');
    }

    #[Route('/subscribe', name: 'subscribe')]
    public function subscribe()
    {
        return $this->render('other/subscribes.html.twig');
    }
}