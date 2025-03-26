<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApprentissageCritiqueController extends AbstractController
{
    #[Route('/apprentissage-critique', name: 'apprentissage_critique')]
    public function index(): Response
    {
        $categories = [
            'Comprendre' => 'apprentissage_critique_comprendre',
            'Concevoir' => 'apprentissage_critique_concevoir',
            'Exprimer' => 'apprentissage_critique_exprimer',
            'Entreprendre' => 'apprentissage_critique_entreprendre',
            'Développer' => 'apprentissage_critique_developper',
        ];

        return $this->render('apprentissage_critique/index.html.twig', [
            'categories' => $categories
        ]);
    }

    #[Route('/apprentissage-critique/{category}', name: 'apprentissage_critique_category')]
    public function category(string $category): Response
    {
        return $this->render('apprentissage_critique/category.html.twig', [
            'category' => ucfirst($category),
        ]);
    }
}
