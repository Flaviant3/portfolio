<?php

// src/Service/ProjectService.php

namespace App\Service;

class ProjectService
{
    private array $projects = [
        [
            'title' => 'Projet 1',
            'slug' => 'projet-1',
            'description' => 'Une application web super stylée.',
            'image' => 'https://i.imgur.com/yWcPc0z.png', // 🔄
            'dateCreated' => '2023-10-10 12:00:00',
            'category' => 'Web',
        ],
        [
            'title' => 'Projet 2',
            'slug' => 'projet-2',
            'description' => 'Un outil de gestion de tâches en Symfony.',
            'image' => 'https://i.imgur.com/c5O7puZ.png', // 🔄
            'dateCreated' => '2024-02-01 14:00:00',
            'category' => 'Symfony',
        ],
        [
            'title' => 'Projet 3',
            'slug' => 'projet-3',
            'description' => 'Application mobile en Flutter avec design futuriste.',
            'image' => 'projet3.png', // 🔄
            'dateCreated' => '2025-01-20 09:30:00',
            'category' => 'Mobile',
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
