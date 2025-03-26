<?php

// src/Controller/ApprentissageCritiqueController.php

namespace App\Controller;

use App\Entity\CriticalLearning;
use App\Form\CriticalLearningType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Repository\CriticalLearningRepository;

class ApprentissageCritiqueController extends AbstractController
{
// Route pour afficher la liste des apprentissages critiques
    #[Route('/apprentissage-critique', name: 'apprentissage_critique')]
    public function index(CriticalLearningRepository $criticalLearningRepository): Response
    {
        // Récupérer tous les apprentissages critiques
        $criticalLearnings = $criticalLearningRepository->findAll();

        return $this->render('apprentissage_critique/index.html.twig', [
            'criticalLearnings' => $criticalLearnings,
        ]);
    }

    #[Route('/apprentissage-critique/{category}', name: 'apprentissage_critique_category')]
    public function category(string $category, CriticalLearningRepository $criticalLearningRepository): Response
    {
        // Récupérer les apprentissages critiques pour la catégorie sélectionnée
        $criticalLearnings = $criticalLearningRepository->findByCategory($category);

        return $this->render('apprentissage_critique/category.html.twig', [
            'category' => ucfirst($category),
            'criticalLearnings' => $criticalLearnings,
        ]);
    }

// Route pour ajouter un apprentissage critique
    #[Route('/ajouter-apprentissage-critique', name: 'add_critical_learning')]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $learning = new CriticalLearning();  // Création d'une nouvelle instance de CriticalLearning
        $form = $this->createForm(CriticalLearningType::class, $learning);  // Création du formulaire
        $form->handleRequest($request);  // Traitement de la requête

        if ($form->isSubmitted() && $form->isValid()) {
            // Sauvegarde de l'objet dans la base de données
            $entityManager->persist($learning);
            $entityManager->flush();

            // Message flash pour notifier l'utilisateur
            $this->addFlash('success', 'Apprentissage critique ajouté avec succès !');

            // Redirection vers la page des apprentissages critiques
            return $this->redirectToRoute('apprentissage_critique');
        }

        return $this->render('apprentissage_critique/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
