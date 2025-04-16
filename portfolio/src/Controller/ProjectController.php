<?php

namespace App\Controller;

use App\Service\ProjectService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/projets', name: 'projects')]
    public function index(ProjectService $projectService): Response
    {
        $projects = $projectService->getAllProjects();

        return $this->render('project/index.html.twig', [
            'projects' => $projects,
        ]);
    }

    #[Route('/projet/{slug}', name: 'show_project')]
    public function show(string $slug, ProjectService $projectService): Response
    {
        $project = $projectService->getProjectBySlug($slug);

        if (!$project) {
            throw $this->createNotFoundException('Projet introuvable');
        }

        return $this->render('project/show.html.twig', [
            'project' => $project,
        ]);
    }
}
