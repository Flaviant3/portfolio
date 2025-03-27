<?php

// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProjectRepository;

class HomeController extends AbstractController
{
#[Route('/', name: 'home')]
public function index(ProjectRepository $projectRepository): Response
{
// Récupérer tous les projets depuis la base de données
$projects = $projectRepository->findAll();

return $this->render('home/index.html.twig', [
'projects' => $projects, // Passer la variable au template
]);
}
}
