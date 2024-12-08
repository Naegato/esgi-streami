<?php

declare(strict_types=1);

namespace App\Controller\Movie;

use App\Repository\PlaylistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListController extends AbstractController
{
    public function __construct(private readonly PlaylistRepository $playlistRepository)
    {
    }

    #[Route('/lists', name: 'lists')]
    public function index(Request $request): Response
    {
        $playlists = $this->playlistRepository->findAll();
        $selectedPlaylistId = $request->query->get('selectedPlaylist');

        $selectedPlaylist = $selectedPlaylistId ? $this->playlistRepository->find($selectedPlaylistId) : null;

        return $this->render('movie/lists.html.twig', [
            'playlists' => $playlists,
            'selectedPlaylist' => $selectedPlaylist ?? $playlists[0],
        ]);
    }
}
