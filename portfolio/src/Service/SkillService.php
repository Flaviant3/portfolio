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
            'code' => 'AC11.05',
            'name' => 'Identifier les cibles (critères socio-économiques, démographiques, géographiques, culturels...)',
            'description' => <<<HTML
<p>Dans le cadre de la <strong>SAE 101</strong>, j'ai participé à une étude ciblée visant à évaluer l’efficacité de la communication numérique de plusieurs <strong>sites web de musées</strong>.</p>

<ul>
    <li>🔹 <strong>Collecte et analyse de données</strong> : Mon équipe a analysé des données démographiques, comportementales et géographiques pour identifier les caractéristiques des visiteurs réels et potentiels.</li>
    <li>🔹 <strong>Segmentation des publics</strong> : Nous avons segmenté les cibles en fonction de leurs profils socio-économiques et culturels pour mieux comprendre leurs attentes.</li>
    <li>🔹 <strong>Identification des points forts</strong> : Mise en valeur des stratégies efficaces déjà en place, comme l’accessibilité des contenus ou la valorisation du patrimoine.</li>
    <li>🔹 <strong>Pistes d'amélioration</strong> : Formulation de recommandations pour renforcer la communication, notamment via des adaptations linguistiques, visuelles ou structurelles.</li>
</ul>

<p>Le travail a été documenté dans un <strong>Google Slides</strong> détaillé, accessible via le lien ci-dessous.</p>
HTML,
            'image' => 'https://i.imgur.com/HTI7d8M.png', // Image principale illustrant le sujet
            'image_illustration' => 'https://i.imgur.com/udeaq6Y.jpeg', // Illustration 1 : données ou public cible
            'image_illustration2' => '', // Illustration 2 : carte, diagramme ou segmentation
            'project' => [
                'title' => 'Étude des publics cibles de sites de musées',
                'description' => 'Analyse approfondie des caractéristiques démographiques et culturelles des visiteurs afin d’optimiser la communication des musées en ligne.',
            ],
            'project_link' => 'https://docs.google.com/presentation/d/1wz-4fwtXFH8GW5SgcEPfUF5hG08HBOrz1DVPCKSPiM0/edit?usp=sharing', // À remplacer par le vrai lien
        ],
        [
            'code' => 'AC11.06',
            'name' => 'Réaliser des entretiens utilisateurs pour construire des personae et des récits utilisateurs (user stories)',
            'description' => <<<HTML
<p>Dans le cadre du <strong>projet SAE 201</strong>, nous avons mené une analyse approfondie du public cible d'une <strong>application de déplacement à vélo</strong>.</p>

<ul>
    <li>🔹 <strong>Entretiens et analyse contextuelle</strong> : Étude des usages réels de l'application via la collecte de retours d’utilisateurs issus de forums, de critiques d'app et de témoignages terrain.</li>
    <li>🔹 <strong>Extraction des données</strong> : Utilisation de <strong>Matlab</strong> pour l’analyse sémantique des commentaires et la mise en évidence des termes récurrents associés aux attentes, besoins ou frustrations.</li>
    <li>🔹 <strong>Construction de personae</strong> : Création de profils utilisateurs représentatifs basés sur les comportements, objectifs et contraintes identifiés.</li>
    <li>🔹 <strong>User stories</strong> : Rédaction de récits utilisateurs décrivant des scénarios typiques d’usage pour guider la conception centrée utilisateur.</li>
</ul>

<p>Les résultats ont été présentés dans le cadre d’un livrable <strong>SAE 201</strong>, accessible ci-dessous.</p>
HTML,
            'image' => 'https://i.imgur.com/dOUL3gb.png', // Image principale liée à la thématique vélo/app
            'image_illustration' => 'https://i.imgur.com/d5727SB.jpeg', // Illustration 1 : graphique ou données issues de l’analyse
            'image_illustration2' => 'https://i.imgur.com/PBC8hMW.jpeg', // Illustration 2 : exemple de persona ou user story
            'project' => [
                'title' => 'Analyse utilisateurs pour une app vélo',
                'description' => 'Étude qualitative des utilisateurs d’une application de déplacement à vélo, basée sur l’analyse des retours et la construction de personae.',
            ],
            'project_link' => 'https://www.example.com/sae201-app-velo', // À remplacer par le lien réel du livrable
        ],
        [
            'code' => 'AC21.01',
            'name' => 'Analyser la stratégie de communication ou marketing d’un acteur, d’une organisation au regard d’un secteur ou d’un marché (stratégie, mission, valeurs...)',
            'description' => <<<HTML
<p>Dans le cadre de ce projet, j’ai réalisé une <strong>analyse stratégique approfondie</strong> d’un acteur du marché en matière de communication et de marketing.</p>

<ul>
    <li>🔹 <strong>Étude de la mission et des valeurs</strong> : Identification des piliers fondamentaux de l'organisation afin de comprendre le positionnement de sa communication.</li>
    <li>🔹 <strong>Analyse du marché et de la concurrence</strong> : Évaluation de l’environnement sectoriel pour situer l'organisation face à ses concurrents.</li>
    <li>🔹 <strong>Positionnement stratégique</strong> : Observation des choix de communication (visuelle, éditoriale, digitale) pour en évaluer la cohérence et la pertinence.</li>
    <li>🔹 <strong>Axes d'amélioration</strong> : Recommandations pour renforcer l’impact marketing et l’alignement avec les attentes des publics cibles.</li>
</ul>

<p>Ce travail m’a permis de développer une vision critique sur les stratégies de marque et d’identifier les leviers d’optimisation dans un contexte concurrentiel.</p>
HTML,
            'image' => 'https://i.imgur.com/dOUL3gb.png', // Illustration principale : image représentant le branding, marketing ou stratégie
            'image_illustration' => 'https://i.imgur.com/GJIPNa6.jpeg',
            'image_illustration2' => '',// Optionnel : visuel complémentaire lié à la stratégie ou analyse de marque
            'project' => [
                'title' => 'Étude stratégique d’une marque',
                'description' => 'Analyse des valeurs, du positionnement marketing et des choix de communication d’une entité dans son secteur d’activité.',
            ],
            'project_link' => 'http://www.youtube.com/watch?v=gAx0MsZPGCs', // À remplacer par ton vrai lien si dispo
        ],
        [
            'code' => 'AC21.02',
            'name' => 'Auditer un site web, une marque ou un service, en termes de trafic et de référencement',
            'description' => <<<HTML
<p>Dans le cadre de l’<strong>AC2102</strong>, j’ai mené un audit complet d’un site web en analysant à la fois son <strong>trafic</strong> et son <strong>référencement</strong>. Ce travail s’intègre à la <strong>SAE 302</strong> et mobilise différentes compétences transversales.</p>

<ul>
    <li>🔹 <strong>Analyse du trafic</strong> : Étude des données de fréquentation (sources, durée des sessions, taux de rebond…) pour évaluer l’attractivité du site.</li>
    <li>🔹 <strong>Audit SEO</strong> : Évaluation des balises HTML, des mots-clés, du maillage interne et des backlinks selon les bonnes pratiques de référencement naturel.</li>
    <li>🔹 <strong>Apports théoriques</strong> : Application des connaissances acquises en <em>Culture numérique (R304)</em>, <em>Référencement web (R306)</em> et <em>Mathématiques appliquées (R315)</em>.</li>
    <li>🔹 <strong>Recommandations stratégiques</strong> : Formulation de pistes concrètes pour améliorer la visibilité et la performance du site sur les moteurs de recherche.</li>
</ul>

<p>Cette démarche m’a permis de développer une vision globale et critique de la présence en ligne d’une marque, ainsi que des leviers à activer pour l’optimiser.</p>
HTML,
            'image' => 'https://i.imgur.com/dOUL3gb.png', // Image principale illustrant le référencement ou l’analyse web
            'image_illustration' => 'https://i.imgur.com/fgxl0Sa.png',
            'image_illustration2' => 'https://i.imgur.com/CZWgJ6M.jpeg',// Graphique ou visuel complémentaire (ex : dashboard, trafic SEO)
            'project' => [
                'title' => 'Audit SEO et Trafic Web',
                'description' => 'Analyse complète d’un site en termes de fréquentation et de référencement naturel, dans le cadre de la SAE302.',
            ],
            'project_link' => 'https://www.example.com/audit-seo-site', // Remplace par le lien réel si tu en as un
        ],
        [
            'code' => 'AC21.03',
            'name' => 'Traiter des données avec des outils statistiques pour faciliter leur analyse et leur exploitation',
            'description' => <<<HTML
<p>L’<strong>AC2103</strong> m’a permis de développer des compétences dans le <strong>traitement de données</strong> à l’aide d’outils statistiques adaptés, dans le but de faciliter leur analyse et leur interprétation.</p>

<ul>
    <li>🔹 <strong>Analyse statistique</strong> : Application de méthodes statistiques pour structurer et exploiter efficacement des jeux de données complexes.</li>
    <li>🔹 <strong>Visualisation des données</strong> : Utilisation de techniques de datavisualisation pour rendre les résultats plus accessibles et impactants.</li>
    <li>🔹 <strong>SAE 303</strong> : Projet de visualisation des données relatives au nombre de <em>bornes électriques en France</em>, combinant rigueur mathématique (R315) et présentation orale.</li>
    <li>🔹 <strong>Interprétation des résultats</strong> : Mise en lumière de tendances, zones de croissance et enjeux liés à l'infrastructure électrique en France.</li>
</ul>

<p>Ce travail m’a permis d’illustrer concrètement l’impact de la donnée dans la prise de décision et la compréhension des dynamiques territoriales.</p>
HTML,
            'image' => 'https://i.imgur.com/dOUL3gb.png', // Image principale illustrant les bornes ou la dataviz
            'image_illustration' => 'https://i.imgur.com/vc5OeSh.jpeg',
            'image_illustration2' => 'https://i.imgur.com/DH7Nvri.jpeg',// Graphique ou carte de datavisualisation
            'project' => [
                'title' => 'Datavisualisation : Bornes électriques en France',
                'description' => 'Traitement statistique et visualisation des données liées à l’implantation des bornes électriques dans le cadre de la SAE 303.',
            ],
            'project_link' => '', // Lien vers le projet ou la présentation, si dispo
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
