<?php

// src/Service/SkillService.php

namespace App\Service;

class SkillService
{
    private array $skills = [
        [
            'code' => 'AC11.01',
            'name' => 'Présenter une organisation, ses activités et son environnement',
            'description' => <<<HTML
<p>Dans le cadre de mes études, j'ai effectué des travaux portant sur deux thématiques liées au numérique :</p>

<ul>
    <li>🔹 <strong>R104</strong> : Présentation approfondie sur le <em>Darknet</em> et les techniques de <em>hacking</em>.</li>
    <li>🔹 <strong>R204</strong> : Étude sur l'<em>économie numérique</em> et création d’un <strong>site éco-responsable</strong>.</li>
</ul>

<p>Ces projets m'ont permis de développer une compréhension des <strong>enjeux techniques, économiques et sociétaux</strong> liés au numérique.</p>
HTML,
            'image' => 'https://i.imgur.com/lOqbcgh.png',
            'image_illustration' => 'https://i.imgur.com/0tsFAGh.png',
            'image_illustration2' => '',
            'project' => [
                'title' => 'Blog Éco Responsable sur la liberté',
                'description' => 'Un site web interactif et éthique conçu pour sensibiliser à la consommation numérique.',
            ],
            'project_link' => 'http://45.147.97.119/blog/index.html'
        ],
        [
            'code' => 'AC11.02',
            'name' => 'Évaluer un site web, un produit multimédia ou un dispositif interactif existant en s’appuyant sur des guides de bonnes pratiques',
            'description' => <<<HTML
<p>Dans le cadre de ce projet, j'ai réalisé une évaluation approfondie d'un site web en m'appuyant sur des guides de bonnes pratiques. Plusieurs aspects clés ont été étudiés :</p>

<ul>
    <li>🔹 <strong>Public cible</strong> : Analyse des utilisateurs et de leurs besoins pour garantir une expérience optimale.</li>
    <li>🔹 <strong>Typographie</strong> : Réorientation de l'approche pour se concentrer davantage sur l'expérience utilisateur que sur la seule esthétique typographique.</li>
    <li>🔹 <strong>Navigation</strong> : Examen minutieux de l'architecture de l'information pour optimiser l'accès aux contenus.</li>
    <li>🔹 <strong>Mise en retrait des aspects typographiques</strong> pour se focaliser sur les attentes concrètes des utilisateurs.</li>
</ul>

<p>J'ai également préparé un <strong>document Google Slides</strong> détaillant le projet, son analyse et les conclusions tirées de cette évaluation.</p>
HTML,
            'image' => 'https://i.imgur.com/sEauqnd.png',
            'image_illustration' => 'https://i.imgur.com/J0RX4se.jpeg',
            'image_illustration2' => '',
            'project' => [
                'title' => 'Évaluation du Site Web : Approche Utilisateur',
                'description' => 'Évaluation approfondie d\'un site web en analysant la navigation, la typographie et les besoins utilisateurs.',
            ],
            'project_link' => 'https://docs.google.com/presentation/d/1wz-4fwtXFH8GW5SgcEPfUF5hG08HBOrz1DVPCKSPiM0/edit?usp=sharing',
        ],
        [
            'code' => 'AC11.03',
            'name' => 'Produire des analyses statistiques descriptives et les interpréter pour évaluer un contexte socio-économique',
            'description' => <<<HTML
<p>Dans le cadre de la <strong>SAE 101</strong>, j'ai participé à une étude approfondie des données statistiques issues des sites web de musées, afin de produire une analyse sectorielle pertinente et ciblée.</p>

<ul>
    <li>🔹 <strong>Collecte et analyse des données</strong> : Traitement et visualisation de données web liées à la fréquentation et à l’interaction des visiteurs sur les sites des musées.</li>
    <li>🔹 <strong>Focus sur le public cible</strong> : J'ai spécifiquement travaillé sur l'identification des audiences principales pour chaque musée étudié, en analysant leurs comportements en ligne et leurs préférences.</li>
    <li>🔹 <strong>Propositions d'amélioration</strong> : Cette analyse a permis de dégager des recommandations stratégiques pour optimiser la performance des sites web, avec une attention particulière portée sur les attentes des publics cibles.</li>
</ul>

<p>Un cas concret de cette analyse a été mené sur le site du <strong>British Museum</strong>, permettant d’illustrer les écarts entre les objectifs institutionnels et les usages réels observés à travers les données.</p>
HTML,
            'image' => 'https://i.imgur.com/eokktXd.png',
            'image_illustration' => 'https://i.imgur.com/EGJzb42.jpeg',
            'image_illustration2' => 'https://i.imgur.com/L6wg26v.jpeg',
            'project' => [
                'title' => 'Analyse statistique des sites de musées',
                'description' => 'Étude sectorielle des performances web de plusieurs musées, avec un focus sur les publics cibles et les axes d’amélioration.',
            ],
            'project_link' => 'https://www.example.com/statistiques-british-museum',
        ],
        [
            'code' => 'AC11.04',
            'name' => 'Analyser des formes médiatiques et leur sémiotique',
            'description' => <<<HTML
<p>Dans le cadre de ce projet, j'ai réalisé une <strong>analyse sémiotique et graphique</strong> de plusieurs sites web marchands afin de comprendre leur impact visuel et leur communication implicite.</p>

<ul>
    <li>🔹 <strong>Éléments analysés</strong> : Étude approfondie des images, couleurs, typographies, logos et pictogrammes utilisés sur trois sites de e-commerce.</li>
    <li>🔹 <strong>Objectif</strong> : Identifier l’adéquation entre ces éléments graphiques et les attentes des publics cibles.</li>
    <li>🔹 <strong>Tendances observées</strong> : Cette démarche m’a permis de dégager des tendances actuelles en matière de conception visuelle dans le secteur du e-commerce.</li>
    <li>🔹 <strong>Approche sémiotique</strong> : Analyse des signes, symboles et codes utilisés pour susciter l’adhésion, guider l’attention ou stimuler l’achat.</li>
</ul>

<p>Les analyses ont porté sur trois cas concrets, dont :</p>
<ul>
    <li>1er site : Site de vêtements urbains - mise en avant d’une esthétique jeune et dynamique.</li>
    <li>2e site : Plateforme de produits bio - valorisation d’une image naturelle et éthique.</li>
    <li>3e site : Boutique de technologie - style minimaliste, centré sur l’innovation et la performance.</li>
</ul>
HTML,
            'image' => 'https://i.imgur.com/9zeEUr2.png', // Image principale (capture d'un des sites ou visuel générique)
            'image_illustration' => 'https://i.imgur.com/SKBB7FF.jpeg', // Exemple visuel analysé
            'image_illustration2' => 'https://i.imgur.com/TzuYI3b.jpeg', // Seconde illustration
            'project' => [
                'title' => 'Analyse sémiotique de sites e-commerce',
                'description' => 'Étude visuelle et sémiotique de trois sites web marchands afin d’identifier les codes graphiques adaptés aux attentes du public cible.',
            ],
            'project_link' => 'https://eu.wrangler.com/fr-fr/home', // À personnaliser avec le lien réel
        ],
        [
            'code' => 'COMPRENDRE',
            'name' => 'Identifier les cibles (critères socio-économiques, démographiques, géographiques, culturels)',
            'description' => '',
            'image' => 'https://i.imgur.com/HTI7d8M.png',
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
