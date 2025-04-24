<?php

namespace App\Service;

class ProjectService
{
    private array $projects = [
        [
            'title' => 'Chaine YouTube',
            'slug' => 'chaine-youtube',
            'description' => '+600% d’interactions depuis 2025 grâce à une stratégie de contenu automatisée.',
            'image' => 'https://m.media-amazon.com/images/I/4195dyf+rFL.png',
            'dateCreated' => '2023-10-10 12:00:00',
            'category' => 'Web',
            'technologies' => ['YouTube API', 'Canva', 'HTML', 'SEO'],
            'role' => 'Créateur, monteur, analyste SEO',
            'duration' => '2 ans',
            'status' => 'En cours',
            'client' => 'Projet personnel',
            'liveDemo' => 'https://www.youtube.com/@FlavianTech',
            'repository' => null,
            'highlights' => [
                'Automatisation des miniatures',
                'Croissance organique exponentielle',
                'Analyse des métadonnées pour améliorer le taux de clic',
            ],
        ],
        [
            'title' => 'TaskMaster',
            'slug' => 'taskmaster',
            'description' => 'Un outil de gestion de tâches collaboratif en Symfony avec système de rôles avancé.',
            'image' => 'https://i.imgur.com/c5O7puZ.png',
            'dateCreated' => '2024-02-01 14:00:00',
            'category' => 'Symfony',
            'technologies' => ['Symfony', 'Twig', 'MySQL', 'Bootstrap'],
            'role' => 'Développeur Full-Stack',
            'duration' => '4 mois',
            'status' => 'Terminé',
            'client' => 'Client freelance',
            'liveDemo' => null,
            'repository' => 'https://github.com/flavian-tech/taskmaster',
            'highlights' => [
                'Authentification & gestion des permissions',
                'Notifications en temps réel avec Mercure',
                'UX épuré & responsive',
            ],
        ],
        [
            'title' => 'NeoWallet',
            'slug' => 'neowallet',
            'description' => 'Application mobile futuriste pour gérer ses cryptos avec Flutter.',
            'image' => 'https://via.placeholder.com/300x200.png?text=NeoWallet',
            'dateCreated' => '2025-01-20 09:30:00',
            'category' => 'Mobile',
            'technologies' => ['Flutter', 'Firebase', 'Figma'],
            'role' => 'Designer & Dev Flutter',
            'duration' => '6 mois',
            'status' => 'En développement',
            'client' => 'Startup fictive',
            'liveDemo' => null,
            'repository' => 'https://github.com/flavian-tech/neowallet',
            'highlights' => [
                'UI futuriste avec animations fluides',
                'Connexion sécurisée biométrique',
                'Mode clair/sombre automatique',
            ],
        ],
        // Tu peux en ajouter autant que tu veux dans ce format 🧱
    ];

    public function getAllProjects(): array
    {
        return $this->projects;
    }

    public function getProjectBySlug(string $slug): ?array
    {
        foreach ($this->projects as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }

        return null;
    }
}
