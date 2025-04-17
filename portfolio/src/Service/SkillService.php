<?php

// src/Service/SkillService.php

namespace App\Service;

class SkillService
{
    private array $skills = [
        [
            'code' => 'COMPRENDRE',
            'name' => 'Présenter une organisation, ses activités et son environnement (économique, sociologique, culturel, juridique, technologique, communicationnel et médiatique)',
            'description' => '',
            'image' => 'https://i.imgur.com/lOqbcgh.png',
        ],
        [
            'code' => 'COMPRENDRE',
            'name' => 'Évaluer un site web, un produit multimédia ou un dispositif interactif existant en s’appuyant sur des guides de bonnes pratiques',
            'description' => '',
            'image' => 'https://i.imgur.com/sEauqnd.png',
        ],
        [
            'code' => 'COMPRENDRE',
            'name' => 'Produire des analyses statistiques descriptives et les interpréter pour évaluer un contexte socio-économique',
            'description' => '',
            'image' => 'https://i.imgur.com/eokktXd.png',
        ],
        [
            'code' => 'COMPRENDRE',
            'name' => 'Analyser des formes médiatiques et leur sémiotique',
            'description' => '',
            'image' => 'https://i.imgur.com/9zeEUr2.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],[
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],[
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],[
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
        [
            'code' => 'AC1001',
            'name' => 'Compréhension du Web',
            'description' => 'Apprendre les bases des technologies web, HTML/CSS, HTTP, etc.',
            'image' => 'https://i.imgur.com/dOUL3gb.png',
        ],
    ];

    public function getAllSkills(): array
    {
        return $this->skills;
    }

    public function addSkill(array $skillData): void
    {
        $this->skills[] = $skillData;
    }

    public function getSkillByCode(string $code): ?array
    {
        foreach ($this->skills as $skill) {
            if ($skill['code'] === $code) {
                return $skill;
            }
        }
        return null;
    }
}
