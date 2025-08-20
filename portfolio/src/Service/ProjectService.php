<?php

namespace App\Service;

class ProjectService
{
    private array $projects = [
        [
            'title' => 'Chaine YouTube',
            'slug' => 'chaine-youtube',
            'description' => '+600% d’interactions depuis 2025 grâce à une stratégie de contenu spécialisé.',
            'image' => 'https://m.media-amazon.com/images/I/4195dyf+rFL.png',
            'dateCreated' => '2015-01-09 12:00:00',
            'category' => 'Web',
            'technologies' => ['YouTube API', 'Canva', 'HTML'],
            'role' => 'Créateur, monteur, Réalisateur, Acteur',
            'duration' => '10 ans',
            'status' => 'En cours',
            'client' => 'Projet personnel',
            'liveDemo' => 'https://www.youtube.com/@flaviant3',
            'repository' => null,
            'highlights' => [
                '+ 2 712% Vues sur 2025',
                '+ 931% Likes sur 2025',
                '+ 138 700% Subscribers sur 2025',
            ],
        ],
        [
            'title' => 'Publicité Restaurant',
            'slug' => 'publicite-restaurant',
            'description' => 'Réalisation d’une publicité vidéo professionnelle pour un restaurant local, visant à booster sa visibilité et attirer une nouvelle clientèle.',
            'image' => 'https://i.imgur.com/0dDHUEa.jpeg',
            'dateCreated' => '2024-02-01 14:00:00',
            'category' => 'Vidéo',
            'technologies' => ['DJI 4K', 'CapCut', 'Premiere Pro'],
            'role' => 'Réalisateur & Monteur vidéo',
            'duration' => '10 jours',
            'status' => 'Terminé',
            'client' => 'Restaurant local',
            'liveDemo' => 'https://youtu.be/1xNs_4GrWvI',
            'repository' => null,
            'highlights' => [
                'Scénario et storyboard créés sur mesure',
                '+ 60.000 vues au total.',
                'Vidéo diffusée sur réseaux sociaux et site web',
            ],
        ],
        [
            'title' => 'Logiciel Gestion de stock',
            'slug' => 'diemer-logiciel',
            'description' => 'Application web de gestion de stock pour un magasin de photographie, permettant de suivre les ventes, les produits et les fournisseurs.',
            'image' => 'https://i.imgur.com/YTJkchA.jpeg',
            'dateCreated' => '2025-01-20 09:30:00',
            'category' => 'Web',
            'technologies' => ['Symfony', 'MySQL', 'Twig'],
            'role' => 'Développeur Full-Stack',
            'duration' => '3 mois',
            'status' => 'Terminé',
            'client' => 'Magasin de photographie',
            'liveDemo' => null,
            'repository' => 'https://github.com/Flaviant3/Diemer',
            'highlights' => [
                'Tableau de bord intuitif pour gérer le stock',
                'Posibilité de commande spécifique',
                'Gestion des fournisseurs et des ventes',
            ],
        ],
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
