<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ProjectService;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ProjectService $projectService): Response
    {
        // Récupérer tous les projets depuis le service
        $projects = $projectService->getAllProjects();

        return $this->render('home/index.html.twig', [
            'projects' => $projects,
        ]);
    }
}
