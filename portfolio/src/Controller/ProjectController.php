<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ProjectService;

class ProjectController extends AbstractController
{
    private ProjectService $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    #[Route('/projets', name: 'projects')]
    public function index(): Response
    {
        $projects = $this->projectService->getAllProjects();
        return $this->render('project/index.html.twig', [
            'projects' => $projects
        ]);
    }
}
