<?php

namespace App\Controller;

use App\Entity\Project;
use App\Form\ProjectType;
use App\Repository\ProjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProjectController extends AbstractController
{
    // Route pour afficher la liste des projets
    #[Route('/projets', name: 'projects')]
    public function index(ProjectRepository $projectRepository): Response
    {
        $projects = $projectRepository->findAll();

        return $this->render('project/index.html.twig', [
            'projects' => $projects,
        ]);
    }

    // Route pour ajouter un projet
    #[Route('/ajouter-projet', name: 'add_project')]
    public function add(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $project = new Project();
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            // Si un fichier image a été téléchargé
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename); // Crée un nom de fichier sans espace
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    // Déplace le fichier dans le répertoire spécifié
                    $imageFile->move(
                        $this->getParameter('uploads_directory'), // Paramètre qui définit le répertoire de destination
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw new \Exception('Erreur lors de l\'upload du fichier');
                }

                // Associe le nom du fichier à l'entité project
                $project->setImage($newFilename);
            }

            // Persiste l'entité project dans la base de données
            $entityManager->persist($project);
            $entityManager->flush();

            // Message flash de succès
            $this->addFlash('success', 'Le projet a été ajouté avec succès !');
            return $this->redirectToRoute('projects');
        }

        return $this->render('project/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
