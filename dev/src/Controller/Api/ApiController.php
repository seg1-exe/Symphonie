<?php

namespace App\Controller\Api;

use App\Entity\Albums;
use App\Entity\Categorie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    #[Route('/api/albums', name: 'app_api_albums')]
    public function index(ManagerRegistry $managerRegistry): JsonResponse
    {
        $albums = $managerRegistry->getRepository(Albums::class)->findAll();
        $data = [];
        foreach ($albums as $album){
            $artistes = [];
            $categories = [];
            foreach ($album->getArtistes() as $artiste){
                $artistes[] = [
                    'id' => $artiste->getId(),
                    'nom' => $artiste->getNom(),
                ];
            }
            foreach ($album->getCategories() as $categorie){
                $categories[] = [
                    'id' => $categorie->getId(),
                    'nom' => $categorie->getNom(),
                ];
            }
            $data[] = [
                'id' => $album->getId(),
                'pochette' => $album->getPochette(),
                'nom' => $album->getNom(),
                'spotify' => $album->getSpotify(),
                'date' => $album->getDate(),
                'artistes' => $artistes,
                "categories" => $categories,
            ];
        }
        return $this->json($data);
    }

    #[Route('/api/album/{id}', name: 'app_api_album')]
    public function album(ManagerRegistry $managerRegistry, string $id): JsonResponse
    {
        $album = $managerRegistry->getRepository(Albums::class)->find($id);
        
        $artistes = [];
        $categories = [];
        foreach ($album->getArtistes() as $artiste){
            $artistes[] = [
                'id' => $artiste->getId(),
                'nom' => $artiste->getNom(),
            ];
        }
        foreach ($album->getCategories() as $categorie){
            $categories[] = [
                'id' => $categorie->getId(),
                'nom' => $categorie->getNom(),
            ];
        }
        $data = [
            'id' => $album->getId(),
            'pochette' => $album->getPochette(),
            'nom' => $album->getNom(),
            'spotify' => $album->getSpotify(),
            'date' => $album->getDate(),
            'artistes' => $artistes,
            "categories" => $categories,
        ];
        
        return $this->json($data);
    }

    #[Route('/api/categories', name: 'app_api_categories')]
    public function categories(ManagerRegistry $managerRegistry): JsonResponse
    {
        $categories = $managerRegistry->getRepository(Categorie::class)->findAll();
        $data = [];
        foreach ($categories as $categorie){
            $albums = [];
            foreach ($categorie->getAlbums() as $album){
                $albums[] = [
                    'id' => $album->getId(),
                    'nom' => $album->getNom(),
                ];
            }
            $data[] = [
                'id' => $categorie->getId(),
                'nom' => $categorie->getNom(),
                'albums' => $albums,
            ];
        }
        return $this->json($data);
    }
}