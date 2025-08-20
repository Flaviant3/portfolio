<?php

// src/Service/SkillService.php

namespace App\Service;

class SkillService
{
    private array $skills = [
        [
            'code' => 'AC11.01',
            'name' => 'Présenter une organisation, ses activités et son environnement',
            'category' => 'Comprendre', // ✅ Ajouté
            'year' => '1ère année',     // ✅ Ajouté
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
            'category' => 'Comprendre', // ✅ Ajouté
            'year' => '1ère année',    // ✅ Ajouté
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
            'category' => 'Comprendre', // ✅ Ajouté
            'year' => '1ère année',
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
            'category' => 'Comprendre', // ✅ Ajouté
            'year' => '1ère année',
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
            'category' => 'Comprendre', // ✅ Ajouté
            'year' => '1ère année',
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
            'category' => 'Comprendre', // ✅ Ajouté
            'year' => '1ère année',
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
            'image' => 'https://i.imgur.com/SQFDuQW.png', // Image principale liée à la thématique vélo/app
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
            'category' => 'Comprendre', // ✅ Ajouté
            'year' => '2ème année',
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
            'image' => 'https://i.imgur.com/AmZDl5z.png', // Illustration principale : image représentant le branding, marketing ou stratégie
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
            'category' => 'Comprendre', // ✅ Ajouté
            'year' => '2ème année',
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
            'image' => 'https://i.imgur.com/EGGsLxs.png', // Image principale illustrant le référencement ou l’analyse web
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
            'category' => 'Comprendre', // ✅ Ajouté
            'year' => '2ème année',
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
            'image' => 'https://i.imgur.com/JGbCFEu.png', // Image principale illustrant les bornes ou la dataviz
            'image_illustration' => 'https://i.imgur.com/vc5OeSh.jpeg',
            'image_illustration2' => 'https://i.imgur.com/DH7Nvri.jpeg',// Graphique ou carte de datavisualisation
            'project' => [
                'title' => 'Datavisualisation : Bornes électriques en France',
                'description' => 'Traitement statistique et visualisation des données liées à l’implantation des bornes électriques dans le cadre de la SAE 303.',
            ],
            'project_link' => '', // Lien vers le projet ou la présentation, si dispo
        ],
        [
            'code' => 'AC21.04',
            'name' => 'Identifier et décrire les parcours client à partir d’enquêtes de terrain',
            'category' => 'Comprendre', // ✅ Ajouté
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de l'<strong>AC2104</strong>, je développe la capacité d'identifier et de décrire les parcours client à partir d'enquêtes de terrain. Cette compétence s'applique de manière pratique dans la <strong>SAE 301</strong>, où, mettant à profit les compétences en <em>design d'expérience</em> (R309), j'ai conçu une expérience utilisateur à travers une plateforme sur le thème du partage de cours et de dates de devoirs.</p>

<ul>
    <li>🔹 <strong>Wireframes</strong> : Création de maquettes représentant la structure de l’application.</li>
    <li>🔹 <strong>Zoning</strong> : Organisation des zones fonctionnelles pour améliorer l'ergonomie.</li>
    <li>🔹 <strong>Prototypes</strong> : Conception interactive avec l’outil <strong>Figma</strong> pour tester l'expérience utilisateur.</li>
    <li>🔹 <strong>Parcours client</strong> : Analyse des besoins utilisateurs pour définir les étapes clés du parcours client.</li>
</ul>

<p>Cette démarche m’a permis d’appliquer les principes du design d’expérience utilisateur et de garantir une expérience fluide et optimale pour les utilisateurs de la plateforme.</p>
HTML,
            'image' => 'https://i.imgur.com/S1BjO8j.png', // Exemple d'image illustrant le design ou les wireframes
            'image_illustration' => 'https://i.imgur.com/EGOUpWd.jpeg', // Illustration de la plateforme
            'image_illustration2' => 'https://i.imgur.com/SiSxZo5.jpeg', // Exemple de wireframe ou prototype
            'project' => [
                'title' => 'Conception de l’Expérience Utilisateur : Partage de Cours et Devoirs',
                'description' => 'Création d’une plateforme interactive pour améliorer l’expérience utilisateur grâce à des wireframes et des prototypes.',
            ],
            'project_link' => '', // Lien vers le projet ou la présentation, si dispo
        ],
        [
            'code' => 'AC21.04.1',
            'name' => 'Identifier et décrire les parcours client à partir d’enquêtes de terrain ( S4 ) 1/4',
            'category' => 'Comprendre', // Exemple de catégorie "Concevoir"
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de <strong>WR403 | Design d'expérience</strong>, j'ai mené des recherches approfondies sur le marché des produits reconditionnés. J'ai analysé comparativement leurs caractéristiques, fonctionnalités et avantages, afin d'établir un portrait détaillé de leur positionnement. Cette analyse s'inscrit dans une démarche centrée sur l'utilisateur, visant à identifier les éléments clés pour optimiser leur expérience. J'ai également étudié les tendances du secteur et les innovations émergentes, pour anticiper les évolutions futures du marché.</p>

<ul>
    <li>🔹 <strong>Analyse comparative</strong> des produits reconditionnés : Caractéristiques, fonctionnalités et avantages.</li>
    <li>🔹 <strong>Identification des besoins utilisateurs</strong> : Comprendre les attentes des consommateurs pour mieux cibler les points d’amélioration.</li>
    <li>🔹 <strong>Etude des tendances du marché</strong> : Observation des évolutions futures du marché des produits reconditionnés.</li>
    <li>🔹 <strong>Innovations émergentes</strong> : Mise en lumière des nouvelles solutions technologiques et des produits à venir.</li>
</ul>

<p>Cette recherche m’a permis de dresser un état des lieux complet du marché et de comprendre les dynamiques actuelles du secteur. J'ai constitué un <strong>dossier de recherches</strong> pour rassembler toutes les informations pertinentes et servir de base pour les étapes suivantes de la conception.</p>
<p><strong>Dossier Recherches</strong>: Benchmark, tendances et analyse détaillée.</p>
HTML,
            'image' => 'https://i.imgur.com/S1BjO8j.png', // Image d'illustration liée à la recherche ou au secteur
            'image_illustration' => 'https://i.imgur.com/qOIfIZ3.png',
            'image_illustration2' => '',// Graphique ou visuel lié à l’analyse
            'project' => [
                'title' => 'Recherche sur le marché des produits reconditionnés',
                'description' => 'Analyse approfondie des produits reconditionnés et identification des opportunités pour améliorer l’expérience utilisateur.',
            ],
            'project_link' => 'https://www.canva.com/design/DAF_sLnrzho/QRB4v0uasmwWO9WVHK-H4g/view', // Lien vers le dossier ou la présentation, si disponible
        ],
        [
            'code' => 'AC21.04.2',
            'name' => 'Identifier et décrire les parcours client à partir d’enquêtes de terrain ( S4 ) 2/4',
            'category' => 'Comprendre', // Exemple de catégorie "Concevoir"
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans la deuxième étape de la démarche <strong>WR403 | Design d'expérience</strong>, j'ai conçu le site web dédié aux produits reconditionnés en utilisant <strong>Figma</strong>. À partir des insights collectés lors de l'étape de recherche, j'ai défini une architecture de l'information adaptée aux besoins des utilisateurs, créant des maquettes détaillées des pages et fonctionnalités. Cette phase a mis l'accent sur l'ergonomie, l'accessibilité et l'esthétique pour garantir une expérience fluide et intuitive.</p>

<ul>
    <li>🔹 <strong>Wireframes</strong> : Création des esquisses de pages pour organiser l'information de manière claire et logique.</li>
    <li>🔹 <strong>Zoning</strong> : Structuration des espaces sur les pages pour une navigation fluide et logique.</li>
    <li>🔹 <strong>Prototypes interactifs</strong> : Réalisation de prototypes testés auprès des utilisateurs pour recueillir des retours pratiques.</li>
    <li>🔹 <strong>Tests utilisateurs</strong> : Validation et itérations du design en fonction des retours sur l'ergonomie et l'expérience utilisateur.</li>
</ul>

<p>Ce travail m'a permis de tester l'interface avec des utilisateurs ciblés, affinant progressivement le design pour qu'il réponde parfaitement à leurs attentes tout en respectant l'identité de la marque.</p>
<p><strong>Figma</strong> a été l'outil central utilisé pour cette conception visuelle.</p>
HTML,
            'image' => 'https://i.imgur.com/S1BjO8j.png', // Image d'illustration de la maquette Figma ou des wireframes
            'image_illustration' => 'https://i.imgur.com/ndb2MQh.png',
            'image_illustration2' => '',
            'project' => [
                'title' => 'Conception du site web des produits reconditionnés',
                'description' => 'Conception d’un site web intuitif et ergonomique dédié aux produits reconditionnés avec Figma.',
            ],
            'project_link' => 'https://www.figma.com/design/3W1xMg3Hddg80HFg5jT9SO/WR403?node-id=0-1&t=6py5S2AW4LizbRrW-1', // Lien vers le projet ou la présentation, si disponible
        ],
        [
            'code' => 'AC21.04.3',
            'name' => 'Identifier et décrire les parcours client à partir d’enquêtes de terrain ( S4 ) 3/4',
            'category' => 'Comprendre', // Exemple de catégorie "Exprimer"
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans cette troisième étape de la démarche <strong>WR403 | Design d'expérience</strong>, j'ai défini un protocole de tests utilisateurs pour évaluer la validité et l'efficacité de l'expérience du site web. L'objectif était de vérifier que l'utilisateur puisse acheter facilement, naviguer sans difficulté et réaliser le processus de reconditionnement de manière fluide.</p>

<ul>
    <li>🔹 <strong>Protocoles de tests</strong> : Mise en place d'un cadre rigoureux pour évaluer l'efficacité du site.</li>
    <li>🔹 <strong>Tests de navigation</strong> : Vérification de la fluidité de la navigation et de l'intuitivité des actions.</li>
    <li>🔹 <strong>Tests d'achat</strong> : Évaluation de la facilité d'achat de produits reconditionnés et des étapes du processus d'achat.</li>
    <li>🔹 <strong>Identification des problèmes</strong> : Recueil des retours utilisateurs sur les problèmes rencontrés et les incertitudes liées à la concurrence, la gestion des références et la confiance envers les produits.</li>
    <li>🔹 <strong>Optimisation</strong> : Analyse des résultats pour optimiser l'expérience utilisateur et éliminer les obstacles.</li>
</ul>

<p>Ces tests m'ont permis de recueillir des données essentielles pour optimiser l'interface du site, en vue de répondre aux besoins réels des utilisateurs tout en leur garantissant une expérience d'achat fluide et sans friction.</p>
<p><strong>Figma</strong> a été utilisé pour simuler les interactions durant les tests utilisateurs.</p>
HTML,
            'image' => 'https://i.imgur.com/S1BjO8j.png', // Image d'illustration de tests utilisateurs ou d'un prototype interactif
            'image_illustration' => 'https://i.imgur.com/MfFOr9g.png', // Capture d'écran d'un test utilisateur
            'image_illustration2' => '',
            'project' => [
                'title' => 'Tests Utilisateurs : Optimisation de l’expérience d’achat',
                'description' => 'Définition et réalisation de tests utilisateurs pour valider l’ergonomie et l’efficacité du site web.',
            ],
            'project_link' => 'https://www.figma.com/design/3W1xMg3Hddg80HFg5jT9SO/WR403?node-id=0-1&t=6py5S2AW4LizbRrW-1', // Lien vers le projet ou la présentation, si disponible
        ],
        [
            'code' => 'AC21.04.4',
            'name' => 'Identifier et décrire les parcours client à partir d’enquêtes de terrain ( S4 ) 4/4',
            'category' => 'Comprendre', // Exemple de catégorie "Entreprendre"
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans cette dernière étape de la démarche <strong>WR403 | Design d'expérience</strong>, j'ai défini des indicateurs clés de performance (KPIs) pour évaluer l'expérience utilisateur du site web dédié aux produits reconditionnés. Ces indicateurs incluent :</p>

<ul>
    <li>🔹 <strong>Taux de conversion</strong> : Proportion d'utilisateurs ayant réalisé un achat par rapport à ceux ayant visité le site.</li>
    <li>🔹 <strong>Temps passé</strong> : Temps moyen passé par les utilisateurs sur le site, un indicateur clé de l'engagement.</li>
    <li>🔹 <strong>Nombre de demandes de reconditionnement</strong> : Nombre de demandes de reconditionnement soumises par les utilisateurs.</li>
    <li>🔹 <strong>Notations</strong> : Évaluations des utilisateurs sur les produits et leur expérience.</li>
    <li>🔹 <strong>Taux de fidélisation</strong> : Mesure du nombre d'utilisateurs revenant sur le site pour effectuer des achats répétitifs.</li>
</ul>

<p>L'analyse de ces métriques permettra de dresser un bilan complet de l'expérience utilisateur et d'identifier à la fois les points forts et les axes d'amélioration. Ces mesures garantiront une optimisation continue de l'expérience utilisateur, en s'appuyant sur des données précises et objectives.</p>
<p><strong>Mesures</strong> basées sur des outils d'analyse web comme Google Analytics et des enquêtes de satisfaction utilisateurs.</p>
HTML,
            'image' => 'https://i.imgur.com/S1BjO8j.png', // Image représentant des indicateurs ou des graphiques de performance
            'image_illustration' => 'https://i.imgur.com/gw2S4V8.png', // Capture d'écran de l'outil de mesure ou de graphique des résultats
            'image_illustration2' => '',
            'project' => [
                'title' => 'Mesures de performance : Optimisation de l’expérience utilisateur',
                'description' => 'Définition et suivi des indicateurs clés de performance pour améliorer continuellement l’expérience utilisateur sur le site.',
            ],
            'project_link' => 'https://docs.google.com/spreadsheets/d/1oEDmyt0uB-D_OG2WwyTGxAbR0FyivDNZ1FytyVoW_Qg/edit?usp=sharing', // Lien vers le projet ou la présentation, si disponible
        ],
        [
            'code' => 'AC21.05',
            'name' => 'Cartographier les expériences utilisateur : points de contact, points de friction et de satisfaction, carte d’empathie.',
            'category' => 'Comprendre', // Exemple de catégorie "Exprimer"
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de l'AC2105, j'ai acquis des compétences en <strong>cartographie de l'expérience utilisateur</strong>, en identifiant les points de contact, les points de friction et de satisfaction, ainsi qu'en créant des cartes d'empathie.</p>

<p>Cette démarche a été appliquée à la conception d'une <strong>plateforme de partage de cours et de dates de devoirs</strong>, visant à améliorer l'expérience utilisateur et à optimiser les interactions au sein de la plateforme. Les étapes suivantes ont été mises en place :</p>

<ul>
    <li>🔹 <strong>Cartographie des points de contact</strong> : Identification des moments où l'utilisateur interagit avec la plateforme, comme l'inscription, la consultation des cours ou l'ajout de devoirs.</li>
    <li>🔹 <strong>Identification des points de friction</strong> : Analyse des obstacles ou des difficultés rencontrées par les utilisateurs, comme une interface trop complexe ou une mauvaise navigation.</li>
    <li>🔹 <strong>Cartographie de la satisfaction</strong> : Mesure de l'impact de chaque étape sur l'expérience utilisateur et la satisfaction globale.</li>
    <li>🔹 <strong>Carte d'empathie</strong> : Création d'une carte d'empathie pour mieux comprendre les attentes, les besoins et les frustrations des utilisateurs.</li>
</ul>

<p>Cette analyse a permis d'optimiser l'interface de la plateforme en prenant en compte les retours et en améliorant les points de friction identifiés, dans le but d'offrir une meilleure expérience utilisateur.</p>
HTML,
            'image' => 'https://i.imgur.com/qnAKvpt.png', // Image représentant une carte d'empathie ou un graphique d'expérience utilisateur
            'image_illustration' => 'https://i.imgur.com/0R4tMmu.jpeg', // Illustration d'un point de contact ou d'un graphique UX
            'image_illustration2' => '',
            'project' => [
                'title' => 'Conception d’une plateforme de partage de cours et de devoirs',
                'description' => 'Cartographie des expériences utilisateur pour optimiser l’expérience et concevoir une plateforme plus intuitive.',
            ],
            'project_link' => '', // Lien vers le projet ou la présentation, si disponible
        ],
        [
            'code' => 'AC21.05.S4',
            'name' => 'Cartographier les expériences utilisateur : points de contact, points de friction et de satisfaction, carte d’empathie.',
            'category' => 'Comprendre', // Catégorie "Exprimer"
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de l'AC21.05, nous avons appliqué les principes de cartographie de l'expérience utilisateur à notre application dédiée aux produits reconditionnés. Nous avons commencé par définir un <strong>protocole de test utilisateur</strong> avec des questions et missions spécifiques, afin de collecter des données détaillées sur les comportements et les besoins des utilisateurs.</p>

<p>Ce processus a impliqué :</p>

<ul>
    <li>🔹 <strong>Définition du protocole de test</strong> : Élaboration d’un ensemble de questions et de missions pour guider les tests utilisateurs. Ces missions ont permis de simuler l'expérience d'achat et d'interaction avec les produits reconditionnés.</li>
    <li>🔹 <strong>Entretiens utilisateurs</strong> : Réalisation de plusieurs entretiens pour recueillir des feedbacks qualitatifs sur l'interface de l'application, les fonctionnalités et la navigation.</li>
    <li>🔹 <strong>Cartographie de l'expérience utilisateur</strong> : Création d'un parcours détaillé des utilisateurs, identifiant les points de contact, les points de friction et de satisfaction, afin de visualiser les interactions et de comprendre les besoins spécifiques.</li>
    <li>🔹 <strong>Carte d'empathie</strong> : Construction d'une carte d'empathie pour analyser les frustrations, les attentes et les motivations des utilisateurs.</li>
</ul>

<p>Cette cartographie a permis d’identifier les zones de friction de l'application et de proposer des ajustements pour améliorer l’expérience globale des utilisateurs.</p>
HTML,
            'image' => 'https://i.imgur.com/qnAKvpt.png', // Image représentant la cartographie de l’expérience utilisateur ou un exemple de test utilisateur
            'image_illustration' => 'https://i.imgur.com/EVl7Awe.png', // Illustration d'un parcours utilisateur ou carte d'empathie
            'image_illustration2' => '',
            'project' => [
                'title' => 'Cartographie de l\'expérience utilisateur : Application de produits reconditionnés',
                'description' => 'Analyse de l\'expérience utilisateur avec des tests, entretiens et cartographie des points de contact et de friction dans l\'application.',
            ],
            'project_link' => '', // Lien vers le projet ou la présentation, si disponible
        ],
        [
            'code' => 'AC12.01',
            'name' => 'Concevoir un produit ou un service en terme d’usage et de fonctionnalité',
            'category' => 'Concevoir', // Catégorie "Concevoir"
            'year' => '1ère année',
            'description' => <<<HTML
<p>Dans le cadre de l'AC12.01, j'ai participé au développement d'un service de réservation de trajets dans le projet SAE202. En tant que membre de l'équipe projet, mon rôle principal a été de concevoir les fonctionnalités du service en fonction des besoins utilisateurs et des spécifications du projet.</p>

<p>Voici les principales tâches que j'ai réalisées :</p>

<ul>
    <li>🔹 <strong>Identification des informations clés</strong> : Détermination des données essentielles à afficher pour les utilisateurs lors de la réservation d'un trajet, comme les horaires, les itinéraires et les prix.</li>
    <li>🔹 <strong>Gestion du projet</strong> : Supervision de la coordination de l'équipe, gestion des délais et suivi des objectifs afin d'assurer la livraison du service dans les temps.</li>
    <li>🔹 <strong>Supervision du développement WordPress</strong> : Assurer la bonne implémentation du service via WordPress en collaboration avec les développeurs, en respectant les besoins fonctionnels et techniques.</li>
    <li>🔹 <strong>Coordination de la communication</strong> : Mise en place d'une stratégie de communication entre les différents membres de l'équipe et avec les parties prenantes externes pour assurer le bon déroulement du projet.</li>
</ul>

<p>Ce projet m'a permis de développer des compétences en gestion de projet, ainsi qu'en conception de services orientés utilisateurs, tout en travaillant sur un environnement technique comme WordPress.</p>
HTML,
            'image' => 'https://i.imgur.com/FKixaMK.png', // Image représentant l'interface de réservation ou le projet
            'image_illustration' => 'https://i.imgur.com/fuyPiok.jpeg', // Illustration des fonctionnalités du service
            'image_illustration2' => 'https://i.imgur.com/DbZdyAE.jpeg',
            'project' => [
                'title' => 'Développement d\'un service de réservation de trajets',
                'description' => 'Conception et gestion d’un service de réservation de trajets en ligne avec une interface sur WordPress.',
            ],
            'project_link' => 'https://mmi22g01.sae202.ovh/agence/', // Lien vers le projet ou la présentation, si disponible
        ],
        [
            'code' => 'AC12.02',
            'name' => 'Construire la proposition de valeur d’un produit ou d’un service',
            'category' => 'Concevoir', // Catégorie "Concevoir"
            'year' => '1ère année',
            'description' => <<<HTML
<p>Dans le cadre de l'AC12.02, mon rôle dans l'équipe a été d'analyser en détail les commentaires des utilisateurs de l'application Komoot. L'objectif était d'identifier les besoins réels des utilisateurs pour construire une proposition de valeur qui réponde à leurs attentes.</p>

<p>Voici les principales étapes de mon intervention :</p>

<ul>
    <li>🔹 <strong>Analyse des commentaires utilisateurs</strong> : J'ai effectué une étude approfondie des retours d'expérience des utilisateurs sur l'application Komoot. Cela m'a permis de comprendre leurs besoins, leurs attentes et leurs frustrations.</li>
    <li>🔹 <strong>Conception du questionnaire</strong> : Sur la base de l'analyse des commentaires, j'ai conçu un questionnaire pour recueillir des informations supplémentaires auprès des utilisateurs. Ce questionnaire a permis de collecter des données pertinentes pour affiner notre compréhension des besoins des utilisateurs.</li>
    <li>🔹 <strong>Création de la proposition de service</strong> : Grâce aux réponses collectées, nous avons pu développer une proposition de service de voyage à vélo adaptée aux besoins spécifiques des utilisateurs. Cette proposition visait à améliorer l'expérience de voyage en tenant compte des préférences et des attentes des utilisateurs de l'application.</li>
</ul>

<p>Ce projet m'a permis de développer des compétences en analyse de données, en construction de questionnaires et en définition de propositions de valeur, tout en prenant en compte les attentes des utilisateurs pour garantir une expérience optimale.</p>
HTML,
            'image' => 'https://i.imgur.com/Rg8AZGR.png', // Image représentant l'application Komoot ou l'interface utilisateur
            'image_illustration' => 'https://i.imgur.com/j3Dw4qb.jpeg', // Illustration des résultats du questionnaire ou analyse des commentaires
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Proposition de valeur pour un service de voyage à vélo sur Komoot',
                'description' => 'Analyse des commentaires utilisateurs et création d’une proposition de service adaptée pour les voyages à vélo.',
            ],
            'project_link' => 'https://docs.google.com/document/d/1E2wF7nYvYahvukuIpeLGLmgbvs42zKbCnBfWlzQ-62o/edit?usp=sharing', // Lien vers le projet ou la présentation, si disponible
        ],
        [
            'code' => 'AC12.03',
            'name' => 'Proposer une recommandation marketing (cibles, objectifs, points de contact)',
            'category' => 'Concevoir', // ✅ Catégorie "Concevoir"
            'year' => '1ère année',
            'description' => <<<HTML
<p>Dans le cadre de l'<strong>AC12.03</strong>, nous avons travaillé en équipe sur le projet <strong>SAE102</strong> pour proposer une recommandation marketing pour l'organisation <em>Réclame-Action</em>.</p>

<ul>
    <li>🔹 <strong>Identification des cibles</strong> : Notre équipe a identifié plusieurs segments de marché potentiels pour mieux comprendre les publics à atteindre.</li>
    <li>🔹 <strong>Analyses détaillées</strong> : Réalisation d'analyses par tranches d'âge et par types de comportements de partage pour ajuster la stratégie de communication.</li>
    <li>🔹 <strong>Moyens de communication adaptés</strong> : Détermination des canaux de communication les plus efficaces pour chaque cible (réseaux sociaux, événements, emailing, etc.).</li>
</ul>

<p>Ce travail nous a permis de formuler des recommandations précises en matière de marketing, en alignant les objectifs, les cibles et les points de contact pour maximiser l'impact des campagnes de communication.</p>
HTML,
            'image' => 'https://i.imgur.com/TB05dvx.png', // Image symbolisant le marketing ou la communication ciblée
            'image_illustration' => 'https://i.imgur.com/DOXx0tr.jpeg',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',// Illustration d'une segmentation de cible ou d'une stratégie marketing
            'project' => [
                'title' => 'Recommandation marketing pour Réclame-Action',
                'description' => 'Analyse des cibles, définition des objectifs et des points de contact dans le cadre du projet SAE102.',
            ],
            'project_link' => 'https://docs.google.com/document/d/1sowbKL_Y3CcP99INcWoEMoEAiGq8axkLq5RR4i0kcaE/edit?usp=sharing', // (si tu veux mettre ton lien Google Slides ici plus tard)
        ],
        [
            'code' => 'AC12.04',
            'name' => 'Proposer une stratégie de communication',
            'category' => 'Concevoir', // ✅ Catégorie "Concevoir"
            'year' => '1ère année',
            'description' => <<<HTML
<p>Dans le cadre de l'<strong>AC12.04</strong>, nous avons travaillé sur le projet <strong>SAE 102</strong> en endossant le rôle de <em>Réclame-Action</em> pour sensibiliser le public via une campagne de communication numérique.</p>

<ul>
    <li>🔹 <strong>Analyse du public cible</strong> : Étude approfondie des audiences pour définir le contenu pertinent à diffuser.</li>
    <li>🔹 <strong>Définition des canaux de communication</strong> : Sélection des supports et médias les plus efficaces pour toucher le public.</li>
    <li>🔹 <strong>Création de contenus</strong> : Élaboration de publications engageantes et adaptées aux attentes des utilisateurs.</li>
    <li>🔹 <strong>Travail rhétorique</strong> : Réalisation d'un portrait persuasif dans le cadre de la ressource <strong>R206</strong>, en fusionnant deux réalités autour d'un thème commun, à l'aide de techniques de communication persuasive.</li>
</ul>

<p>Cette expérience m'a permis de maîtriser la mise en place d'une stratégie de communication ciblée, créative et orientée utilisateur.</p>
HTML,
            'image' => 'https://i.imgur.com/1wwgvIU.png', // Image illustrant la communication numérique ou la sensibilisation
            'image_illustration' => 'https://i.imgur.com/CYRXOiK.jpeg', // Illustration stratégie de communication / contenu numérique
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Campagne de sensibilisation pour Réclame-Action',
                'description' => 'Développement d’une stratégie de communication numérique dans le cadre du projet SAE 102.',
            ],
            'project_link' => 'https://docs.google.com/document/d/1sowbKL_Y3CcP99INcWoEMoEAiGq8axkLq5RR4i0kcaE/edit?usp=sharing', // (à ajouter si lien projet)
        ],
        [
            'code' => 'AC22.01',
            'name' => 'Co-concevoir un produit ou un service (proposition de valeur, fonctionnalités...)',
            'category' => 'Concevoir', // ✅ Catégorie "Concevoir"
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de l'<strong>AC22.01</strong>, je me suis investi dans la <strong>co-conception d'un produit ou d'un service</strong>, en collaborant avec différentes parties prenantes pour élaborer la proposition de valeur et définir les fonctionnalités essentielles.</p>

<ul>
    <li>🔹 <strong>Proposition de valeur</strong> : Construction d'une offre répondant aux attentes des utilisateurs et aux besoins identifiés.</li>
    <li>🔹 <strong>Définition des fonctionnalités</strong> : Détermination précise des services et fonctionnalités pour maximiser l'usage et la satisfaction client.</li>
    <li>🔹 <strong>Travail collaboratif</strong> : Co-création en équipe en impliquant utilisateurs, designers et développeurs dans le processus.</li>
    <li>🔹 <strong>Application en SAE 301</strong> : Projet de création d’un produit ou service innovant, mobilisant notamment les connaissances issues de la ressource <strong>Culture numérique (R304)</strong>.</li>
</ul>

<p>Cette démarche m’a permis de comprendre l'importance de la collaboration interdisciplinaire pour concevoir des produits centrés sur l'utilisateur.</p>
HTML,
            'image' => 'https://i.imgur.com/RTeAmLa.png', // Image de collaboration ou brainstorming UX
            'image_illustration' => 'https://i.imgur.com/4CV2czW.jpeg', // Illustration d'une co-conception / atelier de design
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Co-conception d’un produit innovant',
                'description' => 'Développement collaboratif d’un produit ou service innovant dans le cadre de la SAE 301.',
            ],
            'project_link' => '', // (à ajouter si lien projet disponible)
        ],
        [
            'code' => 'AC22.01.S4',
            'name' => 'Co-concevoir un produit ou un service (proposition de valeur, fonctionnalités...)',
            'category' => 'Concevoir',
            'year' => '2ème année - S4',
            'description' => <<<HTML
<p>Dans le cadre de <strong>R403</strong>, j’ai participé à la <strong>co-conception d’une application</strong> facilitant le reconditionnement de produits cassés.</p>

<ul>
    <li>🔹 <strong>Compréhension des besoins</strong> : Enquêtes utilisateurs, cartographies d’expérience, et création de carte d’empathie pour identifier attentes et motivations.</li>
    <li>🔹 <strong>Tests utilisateurs</strong> : Définition d’un protocole de test pour évaluer l’ergonomie et la fluidité de l’interface.</li>
    <li>🔹 <strong>Conception UI/UX</strong> : Réalisation d’une charte graphique, définition des composants, et design de l’interface via Figma.</li>
    <li>🔹 <strong>Prototype interactif</strong> : Développement d’un prototype fonctionnel et testable par les utilisateurs pour valider le concept.</li>
</ul>

<p>Ce travail m’a permis d’allier méthodologie UX, design collaboratif et validation itérative autour d’un projet à fort impact utilisateur.</p>
HTML,
            'image' => 'https://i.imgur.com/RTeAmLa.png', // Image fictive de l’appli ou moodboard de composants
            'image_illustration' => 'https://i.imgur.com/H7WB9gK.jpeg', // Maquettes ou wireframes sur Figma
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Appli de reconditionnement de produits',
                'description' => 'Projet UX mené dans le cadre de R403, visant à concevoir une application facilitant le reconditionnement d’objets cassés.',
            ],
            'project_link' => 'https://www.figma.com/design/3W1xMg3Hddg80HFg5jT9SO/WR403?node-id=11-31&t=KK3EtaO0WmJXxDmk-1', // Lien Figma si tu veux le rajouter
        ],
        [
            'code' => 'AC22.02',
            'name' => 'Produire une recommandation ergonomique à partir des tests utilisateurs (sur système fonctionnel, prototype ou maquette interactive)',
            'category' => 'Concevoir',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de <strong>l’AC2202</strong>, j’ai développé la capacité à <strong>formuler des recommandations ergonomiques</strong> à partir de tests utilisateurs réalisés sur des systèmes fonctionnels, prototypes ou maquettes interactives.</p>

<ul>
    <li>🔹 <strong>Analyse UX</strong> : Identification des points d’amélioration à partir d’observations et de retours utilisateurs sur une maquette interactive développée en SAE 301.</li>
    <li>🔹 <strong>Tests utilisateurs</strong> : Élaboration d’un protocole de test précis (tâches, scénarios, grille d’analyse) pour évaluer l’ergonomie et la fluidité de l’expérience.</li>
    <li>🔹 <strong>Design d’expérience (R303)</strong> : Mobilisation des ressources pour transformer les insights en <strong>recommandations concrètes</strong> d’optimisation (navigation, accessibilité, lisibilité).</li>
    <li>🔹 <strong>Itérations</strong> : Intégration des retours et ajustements successifs dans une logique d’amélioration continue.</li>
</ul>

<p>Ce processus a renforcé ma capacité à concevoir des <strong>solutions centrées utilisateur</strong>, améliorant l’ergonomie de manière tangible grâce à une approche fondée sur les données.</p>
HTML,
            'image' => 'https://i.imgur.com/sdzXtzF.png', // Image illustrant une session de test utilisateur ou prototype
            'image_illustration' => 'https://i.imgur.com/JkG6U3d.png', // Capture d’une maquette ou d’un rapport UX
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Recommandations ergonomiques - SAE 301',
                'description' => 'Évaluation UX et formulation de recommandations pour améliorer l’ergonomie d’un prototype de service numérique.',
            ],
            'project_link' => '', // Lien vers le projet ou les tests si dispo
        ],
        [
            'code' => 'AC22.03',
            'name' => 'Co-construire une recommandation stratégique (en structurant un plan d’action)',
            'category' => 'Concevoir',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de <strong>l'AC2203</strong>, j'ai développé la capacité à <strong>co-construire des recommandations stratégiques</strong> en structurant des plans d'action concrets, adaptés aux objectifs de communication plurimédias.</p>

<ul>
    <li>🔹 <strong>SAE 302</strong> : Conception et production d'une <strong>publicité innovante et multilingue</strong>, avec une approche stratégique centrée sur les écosystèmes numériques.</li>
    <li>🔹 <strong>Note d’intention</strong> : Définition des objectifs, ciblage des publics, et planification des étapes de création.</li>
    <li>🔹 <strong>Storyboard</strong> : Élaboration visuelle et narrative pour garantir la cohérence entre les messages et les médias utilisés.</li>
    <li>🔹 <strong>Adaptation culturelle</strong> : Développement d’une approche multilingue et multiculturelle pour toucher efficacement des audiences internationales.</li>
</ul>

<p>Ce projet a renforcé ma capacité à articuler <strong>stratégie</strong> et <strong>créativité</strong> pour construire des recommandations adaptées aux réalités du marché et aux objectifs de communication numérique.</p>
HTML,
            'image' => 'https://i.imgur.com/kJ9pCET.png', // Illustration d'un storyboard ou tournage
            'image_illustration' => 'https://i.imgur.com/u7kYIQ3.png', // Extrait de la publicité ou de la note d’intention
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Création d’une publicité multilingue - SAE 302',
                'description' => 'Conception stratégique et production d’une publicité adaptée à des publics francophones et internationaux dans un projet plurimédia.',
            ],
            'project_link' => 'https://drive.google.com/file/d/1ldJCt_djLLAcBTmUwnP4mo3VLjvL0wsD/view?usp=sharing', // Lien vers la note d’intention ou la publicité si disponible
        ],
        [
            'code' => 'AC22.04',
            'name' => 'Optimiser le référencement d’un site web, d’un produit ou d’un service',
            'category' => 'Concevoir',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de <strong>l'AC2204</strong>, j’ai appris à <strong>optimiser le référencement</strong> de contenus numériques afin d'améliorer leur <strong>visibilité</strong> sur les moteurs de recherche et d'assurer une meilleure <strong>accessibilité</strong> au public cible.</p>

<ul>
    <li>🔹 <strong>SAE 302</strong> : Application concrète des compétences en référencement (R306) dans le cadre de la création d’un projet plurimédia professionnel.</li>
    <li>🔹 <strong>Stratégie SEO</strong> : Identification des mots-clés, structuration des contenus, optimisation des métadonnées et balisages.</li>
    <li>🔹 <strong>Contenus associés</strong> : Production d’une <em>note d’intention</em>, d’un <em>storyboard</em> et d’une <em>publicité</em>, renforcés par une <em>modélisation 3D</em> d’un parfum.</li>
    <li>🔹 <strong>Impact global</strong> : Intégration du référencement comme levier stratégique pour renforcer la portée du projet auprès des audiences visées.</li>
</ul>

<p>Cette expérience m’a permis de comprendre l’importance du SEO dans un projet de communication et de maîtriser des outils pour rendre un contenu <strong>pertinent, visible et performant</strong>.</p>
HTML,
            'image' => 'https://i.imgur.com/bQDkK5a.png', // Image d'interface web ou SEO
            'image_illustration' => 'https://i.imgur.com/wB9Tj8V.png', // Note d'intention ou extrait d’un projet avec référencement
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Optimisation SEO – SAE 302',
                'description' => 'Optimisation du référencement naturel d’un projet plurimédia incluant vidéo, 3D, et production éditoriale, autour d’un produit parfum.',
            ],
            'project_link' => 'https://drive.google.com/file/d/1ldJCt_djLLAcBTmUwnP4mo3VLjvL0wsD/view?usp=sharing', // Ajouter lien si dispo
        ],
        [
            'code' => 'AC22.05',
            'name' => 'Mettre en place une présence sur les réseaux sociaux',
            'category' => 'Concevoir',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de <strong>l'AC2205</strong>, j’ai acquis la compétence de <strong>développer une stratégie de présence sur les réseaux sociaux</strong>, en tenant compte des spécificités de chaque plateforme, des audiences visées et des objectifs de communication.</p>

<ul>
    <li>🔹 <strong>SAE 302</strong> : Mise en œuvre de cette compétence à travers la création d’un projet complet incluant <em>publicité, storyboard, note d’intention</em> et <em>modélisation 3D</em> d’un parfum.</li>
    <li>🔹 <strong>Stratégie de diffusion</strong> : Élaboration d’un plan de publication, choix des formats adaptés (vidéo, visuel 3D, carrousel...), et identification des canaux sociaux les plus pertinents.</li>
    <li>🔹 <strong>Référencement & visibilité</strong> : Coordination étroite avec les actions SEO (R306) pour renforcer la portée et l’engagement sur les réseaux.</li>
    <li>🔹 <strong>Communication ciblée</strong> : Création de contenus engageants et visuellement cohérents avec l’identité de marque du produit parfumé.</li>
</ul>

<p>Cette expérience m’a permis de comprendre l’importance des réseaux sociaux dans une stratégie de communication globale, et de mettre en pratique les outils nécessaires pour <strong>planifier, créer et diffuser efficacement</strong> du contenu.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Extrait d'une publication ou maquette pour réseaux
            'image_illustration' => 'https://i.imgur.com/4bKxFEq.jpeg', // Mockup ou visuel 3D utilisé sur les réseaux
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Présence sociale – SAE 302',
                'description' => 'Déploiement d’une stratégie de présence sur les réseaux sociaux autour d’une campagne de communication visuelle et sensorielle pour un parfum.',
            ],
            'project_link' => 'https://drive.google.com/file/d/1ldJCt_djLLAcBTmUwnP4mo3VLjvL0wsD/view?usp=sharing', // Ajouter lien si dispo
        ],
        [
            'code' => 'AC13.01',
            'name' => 'Écrire pour les médias numériques',
            'category' => 'Exprimer',
            'year' => '1ère année',
            'description' => <<<HTML
<p>Dans le cadre de <strong>l’AC1301</strong>, j’ai développé la compétence d’<strong>écriture adaptée aux médias numériques</strong>, en explorant différents formats narratifs et dispositifs interactifs.</p>

<ul>
    <li>🔹 <strong>R107</strong> : Réalisation d’un dossier de production comprenant un <em>pitch</em>, un <em>synopsis</em> et un <em>scénario</em> narratif structuré.</li>
    <li>🔹 <strong>R207</strong> : Conception d’un <strong>récit interactif</strong> à l’aide de l’outil <em>Twine</em>, intégrant des <em>choix narratifs</em> et une <em>ambiance sonore immersive</em>.</li>
    <li>🔹 <strong>Écriture interactive</strong> : Création d’histoires non-linéaires permettant une expérience utilisateur personnalisée et engageante.</li>
    <li>🔹 <strong>Enrichissement multimédia</strong> : Utilisation de bruitages et d’éléments audiovisuels pour renforcer l’immersion dans le récit.</li>
</ul>

<p>Ces expériences ont renforcé mes compétences en <strong>écriture scénaristique, interactive et multimédia</strong>, essentielles pour produire des contenus numériques impactants et adaptés aux usages contemporains.</p>
HTML,
            'image' => 'https://i.imgur.com/oS8pa3I.png', // Capture d'écran du récit Twine ou du scénario
            'image_illustration' => 'https://i.imgur.com/Yk5znR7.jpeg', // Visuel de bruitages ou ambiance sonore
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Récit interactif sur Twine',
                'description' => 'Création d’un scénario non-linéaire interactif avec éléments sonores immersifs dans le cadre de R207.',
            ],
            'project_link' => '', // Lien vers l’histoire ou le Twine exporté si disponible
        ],
        [
            'code' => 'AC13.02',
            'name' => 'Produire des pistes graphiques et des planches d’inspiration',
            'category' => 'Exprimer',
            'year' => '1ère année',
            'description' => <<<HTML
<p>Dans le cadre de <strong>l’AC1302</strong>, j’ai développé des compétences en <strong>exploration graphique</strong> et en <strong>construction visuelle</strong>, à travers la création de pistes d'inspiration et l’apprentissage de techniques de représentation.</p>

<ul>
    <li>🔹 <strong>R109</strong> : Conception de l’univers graphique d’un <em>bar punk</em> à partir d’une <strong>carte mentale</strong>, d’un <strong>manifeste visuel</strong> et d’un <strong>moodboard</strong>.</li>
    <li>🔹 <strong>R2109</strong> : Apprentissage de la <strong>perspective conique</strong> dans Illustrator pour modéliser une <em>chambre 3D réaliste</em>.</li>
    <li>🔹 <strong>Composition visuelle</strong> : Fusion des compétences graphiques et techniques pour proposer un environnement immersif et expressif.</li>
</ul>

<p>Ces projets m’ont permis de renforcer ma capacité à produire des pistes visuelles cohérentes, à explorer des univers graphiques variés, et à structurer l’imaginaire autour d’un projet de design.</p>
HTML,
            'image' => 'https://i.imgur.com/6ag6qTH.png', // Aucune image disponible
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Explorations graphiques – Univers d’un bar punk & chambre en perspective',
                'description' => 'Conception d’un univers graphique et apprentissage de la perspective conique pour modélisation en 3D sous Illustrator.',
            ],
            'project_link' => '', // Aucun lien fourni
        ],
        [
            'code' => 'AC13.03',
            'name' => 'Créer, composer et retoucher des visuels',
            'category' => 'Exprimer',
            'year' => '1ère année',
            'description' => <<<HTML
<p>Dans le cadre de <strong>l’AC1303</strong>, j’ai développé des compétences en <strong>création graphique</strong>, <strong>composition visuelle</strong> et <strong>retouche d’images</strong>, en utilisant des outils professionnels du design numérique.</p>

<ul>
    <li>🔹 <strong>Maîtrise des logiciels</strong> : Utilisation avancée de <em>Photoshop</em> pour la retouche photo et <em>Illustrator</em> pour la création vectorielle.</li>
    <li>🔹 <strong>Création graphique</strong> : Réalisation de visuels percutants, alliant technique et créativité, adaptés à divers contextes de communication visuelle.</li>
    <li>🔹 <strong>Perspectives créatives</strong> : Développement d’une sensibilité graphique à travers la composition, la couleur et la typographie.</li>
</ul>

<p>Ces expériences ont renforcé ma maîtrise des outils de création graphique et m’ont permis d’explorer de nouvelles approches visuelles pour enrichir mes projets personnels et professionnels.</p>
HTML,
            'image' => 'https://i.imgur.com/PeQzbsL.png', // Aucune image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Création et retouche graphique',
                'description' => 'Création de visuels variés à l’aide de Photoshop et Illustrator, explorant retouche, composition et illustration.',
            ],
            'project_link' => '', // Aucun lien précisé
        ],
        [
            'code' => 'AC13.04',
            'name' => 'Tourner et monter une vidéo (scénario, captation image et son...)',
            'category' => 'Exprimer',
            'year' => '1ère année',
            'description' => <<<HTML
<p>Dans le cadre de <strong>l’AC1304</strong>, j’ai acquis une polyvalence dans la <strong>création audiovisuelle</strong>, de la conception au montage, en passant par la captation image et son.</p>

<ul>
    <li>🎬 <strong>SAE104</strong> : Rôle d’acteur et de <em>chef réalisateur</em> pour une interview, avec coordination de l’équipe et supervision de la captation sonore.</li>
    <li>🎥 <strong>Ressource R210</strong> : Direction de tournage et mise en œuvre d’un projet vidéo dans un contexte professionnel simulé.</li>
    <li>🔊 <strong>Compétences développées</strong> : Organisation de production, captation image et son, direction d’équipe, postproduction et montage.</li>
</ul>

<p>Ces projets ont renforcé mes compétences en gestion de projet audiovisuel tout en nourrissant ma passion pour l’image et le récit filmé.</p>
HTML,
            'image' => 'https://i.imgur.com/JaNJEGO.png', // Aucune image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Interview & Tournage vidéo',
                'description' => 'Participation en tant qu’acteur et chef réalisateur sur plusieurs projets audiovisuels dans le cadre des SAE104 et R210.',
            ],
            'project_link' => '', // Aucun lien fourni
        ],
        [
            'code' => 'AC13.05',
            'name' => 'Designer une interface web (wireframes, UI)',
            'category' => 'Exprimer',
            'year' => '1ère année',
            'description' => <<<HTML
<p>Dans le cadre de <strong>l’AC1305</strong>, j’ai conçu une <strong>interface web</strong> pour un <strong>site de covoiturage</strong> dans le projet <strong>SAE 202</strong>.</p>

<ul>
    <li>🧩 <strong>Définition d’une grille typographique</strong> claire et structurée.</li>
    <li>🎨 <strong>Choix d’une typographie</strong> cohérente avec l’identité du service.</li>
    <li>🖼️ <strong>Création d’éléments UI communs</strong> dans une logique de design system.</li>
    <li>🤝 Travail <strong>collaboratif</strong> et méthodique au sein de l’équipe projet.</li>
</ul>

<p>Ce projet m’a permis d’expérimenter la conception d’interface centrée utilisateur, de la wireframe jusqu’à l’esthétique finale, en assurant une cohérence visuelle et fonctionnelle.</p>
HTML,
            'image' => 'https://i.imgur.com/p8dQVkP.png', // Aucune image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Interface Web – Covoiturage',
                'description' => 'Conception d’une interface utilisateur complète pour un service de covoiturage dans le cadre de la SAE 202.',
            ],
            'project_link' => '', // Aucun lien fourni
        ],
        [
            'code' => 'AC13.06',
            'name' => 'Optimiser les médias en fonction de leurs usages et supports de diffusion',
            'category' => 'Exprimer',
            'year' => '1ère année',
            'description' => <<<HTML
<p>Dans le cadre de <strong>l’AC1306</strong>, j’ai optimisé des créations graphiques en fonction de leur <strong>support de diffusion</strong> à travers plusieurs projets :</p>

<ul>
    <li>🖋️ <strong>SAE 103</strong> : création d’un <strong>logo original pour l’Atelier Tattoo Shop</strong>, avec ajout d’un style tatouage et vectorisation typographique.</li>
    <li>🌿 <strong>SAE 202</strong> : conception d’un <strong>logo pour un site de covoiturage écologique</strong>, en cohérence avec l’identité visuelle (choix des couleurs, nom, design).</li>
</ul>

<p>Ces projets m'ont permis de comprendre comment adapter mes visuels aux différents <strong>supports numériques</strong> et d’affiner mes compétences en <strong>design graphique</strong> appliqué.</p>
HTML,
            'image' => 'https://i.imgur.com/VcxFjdm.png', // Aucune image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Logos – Tattoo Shop & Covoiturage',
                'description' => 'Conception et optimisation de logos pour différents projets dans le cadre des SAE 103 et 202.',
            ],
            'project_link' => '', // Aucun lien fourni
        ],
        [
            'code' => 'AC23.01',
            'name' => 'Produire un écrit journalistique sourcé et documenté',
            'category' => 'Exprimer',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de <strong>l’AC2301</strong>, j’ai acquis les compétences nécessaires à la <strong>rédaction journalistique</strong> fondée sur des sources fiables et une documentation rigoureuse.</p>

<p>Cette compétence a été mobilisée dans <strong>la SAE 302</strong>, à travers la création d’un <strong>site web journalistique</strong> traitant du <strong>cyberharcèlement</strong>. Le projet intègre :</p>

<ul>
    <li>📚 Une <strong>démarche d’investigation</strong> et de vérification des sources,</li>
    <li>🗣️ L'utilisation des compétences en anglais (<em>R301 et R302</em>),</li>
    <li>🖥️ Des savoir-faire en <strong>narration et écriture multimédia</strong> (R306).</li>
</ul>

<p>Ce projet m’a permis de combiner rigueur journalistique et narration numérique pour proposer un contenu <strong>crédible, engageant et informatif</strong>.</p>
HTML,
            'image' => 'https://i.imgur.com/xSnYe4R.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Site Web sur le Cyberharcèlement',
                'description' => 'Création d’un site web journalistique autour du thème du cyberharcèlement, en intégrant des pratiques rédactionnelles sourcées et multimédias.',
            ],
            'project_link' => '', // Aucun lien fourni
        ],
        [
            'code' => 'AC23.02',
            'name' => 'Définir une iconographie (illustrations, photographies, vidéos)',
            'category' => 'Exprimer',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de l’<strong>AC23.02</strong>, j’ai développé la compétence de <strong>définir une iconographie cohérente</strong> et pertinente pour différents supports multimédias, incluant illustrations, photographies et vidéos.</p>

<p>Cette compétence repose sur une <strong>culture artistique approfondie</strong> et a été mise en pratique dans divers <strong>projets professionnels</strong>, notamment à travers :</p>

<ul>
    <li>🎥 La création de <strong>publicités</strong>,</li>
    <li>🖼️ La réalisation de <strong>storyboards</strong>,</li>
    <li>📸 La sélection d’éléments visuels adaptés aux messages,</li>
    <li>🧊 La <strong>modélisation 3D</strong> de produits comme un parfum, dans le cadre de la SAE 302.</li>
</ul>

<p>Ces expériences m'ont permis d'assurer une <strong>cohérence visuelle</strong> et esthétique au service d’une stratégie de communication efficace.</p>
HTML,
            'image' => 'https://i.imgur.com/CHzfNFq.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Publicité & Iconographie – SAE 302',
                'description' => 'Création d’une publicité multilingue, d’un storyboard et d’une modélisation 3D, avec une attention particulière à la cohérence de l’iconographie visuelle.',
            ],
            'project_link' => '', // Aucun lien fourni
        ],
        [
            'code' => 'AC23.02.S4',
            'name' => 'Définir une iconographie (illustrations, photographies, vidéos) S4',
            'category' => 'Exprimer',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de l’<strong>AC23.02</strong>, j’ai développé la compétence de <strong>définir une iconographie cohérente</strong> et pertinente à travers illustrations, photographies et vidéos, dans des projets interactifs ou multimédias.</p>

<p>Cette compétence s’est concrétisée notamment dans :</p>

<ul>
    <li>📺 <strong>SAE 302</strong> : Création d’une publicité multilingue et modélisation 3D d’un parfum, avec attention à la cohérence visuelle et au style graphique,</li>
    <li>👥 <strong>SAE 402</strong> : Conception d’un <strong>dispositif interactif sur le thème du double maléfique</strong>, en développant une expérience immersive mêlant <strong>visuels intrigants</strong>, sound design et développement web (VueJS, Canva).</li>
</ul>

<p>Grâce à ces expériences, j’ai affiné ma capacité à créer une <strong>iconographie esthétique, pertinente et engageante</strong> pour enrichir l’expérience utilisateur et servir efficacement le propos narratif ou marketing.</p>
HTML,
            'image' => 'https://i.imgur.com/CHzfNFq.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'SAE 302 & SAE 402 – Publicité & Dispositif interactif',
                'description' => 'Mise en œuvre d’une iconographie forte dans deux projets complémentaires : une publicité professionnelle avec modélisation 3D, et une application interactive autour du double maléfique.',
            ],
            'project_link' => '', // Aucun lien explicite
        ],
        [
            'code' => 'AC23.03',
            'name' => 'Créer et décliner une identité visuelle (charte graphique)',
            'category' => 'Exprimer',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de l’<strong>AC23.03</strong>, j’ai développé mes compétences en <strong>création et déclinaison d’une identité visuelle</strong> complète, à travers la conception de <strong>chartes graphiques cohérentes</strong>.</p>

<p>Ce savoir-faire a été appliqué dans le projet <strong>SAE 302</strong>, où j’ai participé à la <strong>création d’une publicité professionnelle</strong> accompagnée :</p>

<ul>
    <li>d’une <strong>charte graphique</strong> définissant les couleurs, typographies et éléments visuels principaux,</li>
    <li>d’un <strong>storyboard</strong> et d’une <strong>note d’intention</strong>,</li>
    <li>et d’une <strong>modélisation 3D</strong> d’un produit, alignée avec l’univers visuel du projet.</li>
</ul>

<p>Grâce à ma connaissance de la culture artistique acquise en <strong>R310</strong>, j’ai veillé à produire une identité visuelle <strong>impactante, cohérente et adaptée</strong> au public ciblé.</p>
HTML,
            'image' => 'https://i.imgur.com/k0iRQ3J.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'SAE 302 – Publicité & identité visuelle',
                'description' => 'Création d’une charte graphique pour une campagne plurimédia intégrant publicité, modélisation 3D et storyboard.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC23.04',
            'name' => 'Imaginer, écrire et scénariser en vue d’une communication multimédia ou transmédia',
            'category' => 'Exprimer',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de l’<strong>AC23.04</strong>, j’ai renforcé mes compétences en <strong>imagination, écriture et scénarisation</strong> pour des projets de communication <strong>multimédia et transmédia</strong>.</p>

<p>Ce travail a été concrétisé à travers la <strong>SAE 302</strong>, où j’ai participé à un projet professionnel englobant :</p>

<ul>
    <li>la <strong>création d’une publicité</strong> immersive et originale,</li>
    <li>l’élaboration d’un <strong>storyboard</strong> détaillé,</li>
    <li>la rédaction d’une <strong>note d’intention</strong> pour guider la direction artistique,</li>
    <li>et la <strong>modélisation 3D</strong> d’un produit intégré à notre narration visuelle.</li>
</ul>

<p>Grâce à mes connaissances acquises en <strong>narration (R306)</strong> et en <strong>production audiovisuelle (R311)</strong>, j’ai contribué à une communication cohérente et impactante sur l’ensemble des supports visés.</p>
HTML,
            'image' => 'https://i.imgur.com/1KpYdUv.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'SAE 302 – Publicité & communication transmédia',
                'description' => 'Projet plurimédia intégrant narration, vidéo, modélisation 3D et scénarisation transmédia autour d’un produit fictif.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC23.04.S4',
            'name' => 'Imaginer, écrire et scénariser en vue d’une communication multimédia ou transmédia',
            'category' => 'Exprimer',
            'year' => '2ème année – Semestre 4',
            'description' => <<<HTML
<p>Dans le cadre de la <strong>SAE 402</strong>, j’ai mis en œuvre mes compétences en <strong>compréhension des écosystèmes numériques</strong> et en <strong>conception stratégique</strong> pour imaginer, écrire et scénariser une communication multimédia ou transmédia sur le thème du <em>double maléfique</em>.</p>

<p>J’ai mené une <strong>analyse approfondie du contexte</strong> et élaboré un scénario original, en m’adaptant aux <strong>contraintes narratives et techniques</strong> de plusieurs supports de diffusion.</p>

<p>Cette approche m’a permis de créer une expérience <strong>immersive, pertinente et cohérente</strong>, où chaque contenu s’articule autour d’une narration forte et engageante à travers différents canaux.</p>
HTML,
            'image' => 'https://i.imgur.com/1KpYdUv.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'SAE 402 – Dispositif interactif "Double Maléfique"',
                'description' => 'Projet transmédia exploitant narration, développement interactif, sound design et visuels intrigants pour une expérience immersive autour de la thématique du double.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC23.05',
            'name' => 'Réaliser, composer et produire pour une communication plurimédia',
            'category' => 'Exprimer',
            'year' => '2ème année – Semestre 4',
            'description' => <<<HTML
<p>Dans le cadre de l’<strong>AC2305</strong>, j’ai développé des compétences en <strong>réalisation, composition et production</strong> appliquées à une <strong>communication plurimédia</strong>.</p>

<p>Ces compétences ont été mobilisées dans les projets <strong>SAE302</strong> et <strong>SAE303</strong>, incluant la création d’une <strong>publicité</strong>, d’un <strong>storyboard</strong>, d’une <strong>note d’intention</strong> et la <strong>modélisation 3D</strong> d’un produit.</p>

<p>Ma maîtrise des outils audiovisuels (R311) m’a permis de garantir une production à la fois <strong>créative</strong> et <strong>techniquement aboutie</strong>, tandis que mes connaissances en <strong>mathématiques appliquées (R315)</strong> ont renforcé la qualité et la précision des éléments produits.</p>
HTML,
            'image' => 'https://i.imgur.com/omkH9n1.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'SAE 302 / SAE 303 – Création plurimédia',
                'description' => 'Production d’une publicité, d’une note d’intention, d’un storyboard et modélisation 3D d’un parfum dans une approche cohérente et professionnelle de communication plurimédia.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC23.06',
            'name' => 'Élaborer et produire des animations, des designs sonores, des effets spéciaux, de la visualisation de données ou de la 3D',
            'category' => 'Exprimer',
            'year' => '2ème année – Semestre 4',
            'description' => <<<HTML
<p>Dans le cadre de l’<strong>AC2306</strong>, j’ai développé des compétences en <strong>animation</strong>, <strong>design sonore</strong>, <strong>effets spéciaux</strong>, <strong>visualisation de données</strong> et <strong>modélisation 3D</strong>.</p>

<p>J’ai appliqué ces compétences dans le projet <strong>SAE 303</strong>, où j’ai participé à la création d’une <strong>data visualisation</strong> et d’une <strong>présentation orale</strong> sur le thème des <strong>bornes électriques en France</strong>.</p>

<p>Grâce à mes connaissances en <strong>audiovisuel (R311)</strong>, j’ai pu assurer la qualité technique et esthétique de ces productions dans un cadre professionnel exigeant.</p>
HTML,
            'image' => 'https://i.imgur.com/yErz8Je.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'SAE 303 – Data visualisation & Présentation',
                'description' => 'Production d’une visualisation de données et d’une présentation orale sur le nombre de bornes électriques en France, intégrant des éléments audiovisuels de qualité.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC23.06.S4',
            'name' => 'Élaborer et produire des animations, des designs sonores, des effets spéciaux, de la visualisation de données ou de la 3D',
            'category' => 'Exprimer',
            'year' => '2ème année – Semestre 4',
            'description' => <<<HTML
<p>Dans le cadre du projet <strong>SAE 402</strong>, j’ai participé à la <strong>réalisation d’un dispositif interactif</strong> centré sur le thème du <em>double maléfique</em>, en mettant l’accent sur la <strong>production de contenus multimédias immersifs</strong>.</p>

<p>J’ai élaboré des <strong>designs sonores immersifs</strong> et des <strong>effets spéciaux percutants</strong>, soutenus par une phase de recherche approfondie visant à optimiser l’expérience sonore et visuelle du projet.</p>

<p>Cette approche a permis de renforcer l’impact émotionnel et narratif du dispositif, en créant une <strong>expérience plurimédia cohérente et captivante</strong>.</p>
HTML,
            'image' => 'https://i.imgur.com/yErz8Je.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'SAE 402 – Dispositif interactif “Double maléfique”',
                'description' => 'Création d’un dispositif interactif avec effets visuels et design sonore immersifs autour du thème du double maléfique.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC14.01',
            'name' => 'Exploiter de manière autonome un environnement de développement efficace et productif',
            'category' => 'Développé',
            'year' => '1ème année',
            'description' => <<<HTML
<p>Dans le cadre de mes activités de développement web, j’ai exploité de manière autonome un environnement de développement complet pour concevoir, coder et <strong>déployer des sites web</strong>.</p>

<p>J’ai utilisé <strong>HTML</strong> pour la structure, <strong>CSS</strong> pour le style, et <strong>PHP</strong> pour la logique côté serveur, tout en développant avec <strong>Visual Studio Code</strong>. Pour la mise en ligne, j’ai déployé les projets sur un <strong>VPS</strong> personnel à l’aide de <strong>FileZilla</strong>, en transférant mes fichiers via FTP.</p>

<p>Ce travail m’a permis de maîtriser les étapes clés du développement web en autonomie, de la conception à la mise en ligne, dans un environnement productif et professionnel.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Déploiement de sites web dynamiques sur serveur VPS',
                'description' => 'Création et mise en ligne de sites web via HTML, CSS et PHP, déployés sur un VPS à l’aide de FileZilla.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC14.02',
            'name' => 'Produire des pages Web fluides incluant un balisage sémantique efficace et des interactions simples',
            'category' => 'Développé',
            'year' => '1ème année',
            'description' => <<<HTML
<p>Grâce à la ressource <strong>R112</strong>, j’ai renforcé mes compétences en conception de sites web fluides et accessibles, en mettant en œuvre un balisage <strong>HTML sémantique</strong> et des <strong>interactions simples</strong>.</p>

<p>Ces compétences ont été mises en pratique dans le cadre de la <strong>SAE 203</strong>, à travers la création d’un site web dédié à l’univers Minecraft. Ce projet m’a permis d’optimiser la structure du site à l’aide de balises HTML adaptées et de veiller à la qualité de la navigation utilisateur.</p>

<p>Ce site web est le reflet de mon souci du détail et de ma capacité à concevoir des interfaces web claires, accessibles et agréables à utiliser.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Site Minecraft - SAE 203',
                'description' => 'Création d’un site web sur Minecraft avec un balisage sémantique structuré et des interactions simples, dans le cadre de la SAE 203.',
            ],
            'project_link' => 'Site Web',
        ],
        [
            'code' => 'AC14.03',
            'name' => 'Générer des pages Web à partir de données structurées',
            'category' => 'Développé',
            'year' => '1ème année',
            'description' => <<<HTML
<p>Dans le cadre du projet <strong>SAE 105</strong>, j’ai appris à manipuler des <strong>données structurées</strong> provenant d’un fichier Excel, que j’ai converties en <strong>formats CSV puis JSON</strong> pour les intégrer dynamiquement dans une page web en <strong>PHP</strong>.</p>

<p>Cette compétence a été approfondie dans la ressource <strong>R213</strong>, où j’ai utilisé <strong>SQL</strong> pour interagir avec une base de données. J’ai conçu des requêtes permettant de se connecter à la base, d’en extraire les informations pertinentes et de les afficher sous forme de pages web dynamiques.</p>

<p>Ces expériences m’ont permis de comprendre l’intérêt des données structurées dans le développement web et de produire des sites capables de s’adapter dynamiquement au contenu des bases de données.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Affichage dynamique de données - SAE 105 & R213',
                'description' => 'Conversion de données Excel en JSON, affichage en PHP et utilisation de requêtes SQL pour générer des pages web dynamiques.',
            ],
            'project_link' => 'Données',
        ],
        [
            'code' => 'AC14.04',
            'name' => 'Mettre en ligne une application Web en utilisant une solution d’hébergement standard',
            'category' => 'Développé',
            'year' => '1ème année',
            'description' => <<<HTML
<p>Dans le projet <strong>SAE 105</strong>, j’ai amélioré la connexion SSH afin de mettre à jour les services <strong>Apache</strong> et <strong>PHP</strong>, puis hébergé mon site sur un <strong>VPS</strong> à l’aide de FileZilla pour le transfert des fichiers.</p>

<p>Pour le projet <strong>SAE 203</strong>, j’ai appris à utiliser <strong>GitHub</strong> comme solution d’hébergement avec versioning. J’ai transféré les fichiers depuis Docker vers GitHub, puis les ai récupérés sur le VPS, assurant une mise en ligne efficace et traçable de l’application.</p>

<p>Grâce à cette démarche, j’ai pu maîtriser les processus d’hébergement web en environnement professionnel tout en tirant profit des outils de versioning pour garantir la stabilité et la continuité du service.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Hébergement web sur VPS – SAE 105 & SAE 203',
                'description' => 'Utilisation de FileZilla, SSH, GitHub et Docker pour déployer et gérer des applications web sur serveur distant.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC14.05',
            'name' => 'Modéliser les données d’une application Web',
            'category' => 'Développé',
            'year' => '1ème année',
            'description' => <<<HTML
<p>Dans le cadre du projet <strong>SAE 203</strong>, j’ai eu l’opportunité de modéliser les données pour un système d’information complet. Grâce aux ressources <strong>R214</strong> et <strong>R213</strong>, j’ai acquis des compétences solides en modélisation, en utilisant les outils MCD (Modèle Conceptuel de Données) et MLD (Modèle Logique de Données).</p>

<p>J’ai également appris à appliquer la méthode GET, qui m’a permis de structurer efficacement les données en fonction des besoins fonctionnels du projet. Cette approche m’a aidé à concevoir un système d’information cohérent et performant, en assurant une gestion optimale et évolutive des données de notre application web.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'SAE 203 – Modélisation de données pour un site d’information',
                'description' => 'Conception MCD/MLD et structuration de la base de données pour un site web dynamique.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC14.06',
            'name' => 'Déployer et personnaliser une application Web en utilisant un CMS ou un framework MVC',
            'category' => 'Développé',
            'year' => '1ème année',
            'description' => <<<HTML
<p>Dans le cadre du projet <strong>SAE 203</strong>, j’ai adapté un modèle d’accès aux données en développant une interface d’administration sécurisée et fonctionnelle.</p>

<p>Grâce à l’intégration d’un <code>.htaccess</code>, l’accès à l’espace administrateur est restreint, garantissant la confidentialité des données sensibles. J’ai également implémenté des fonctionnalités essentielles telles que l’affichage dynamique des données de la base sous forme de tableau, ainsi que des options pour <strong>ajouter, modifier et supprimer</strong> les éléments.</p>

<p>Ce travail m’a permis de comprendre en profondeur la logique MVC, tout en développant une interface conviviale et efficace pour la gestion de contenu, démontrant mes compétences en personnalisation d’une application web dans un cadre structuré.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'SAE 203 – Interface d’administration sécurisée et personnalisée',
                'description' => 'Mise en place d’un espace d’administration avec restrictions d’accès et gestion CRUD des données.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC24.01',
            'name' => 'Produire des pages et applications Web responsives',
            'category' => 'Développé',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de la <strong>SAE 303</strong>, j’ai développé des compétences avancées en production de pages et d’applications web <strong>responsives</strong>, capables de s’adapter à différents supports (mobiles, tablettes, ordinateurs).</p>

<p>En utilisant les langages HTML, CSS et JavaScript, complétés par mes connaissances en <strong>développement front-end</strong> acquises dans la ressource <strong>R312</strong>, j’ai participé activement à la conception d’interfaces interactives et ergonomiques.</p>

<p>J’ai également veillé à optimiser l’expérience utilisateur en intégrant des <strong>interactions riches</strong> et des animations fluides, garantissant une navigation intuitive sur tous les appareils. Ces compétences sont au cœur des enjeux actuels du web moderne.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'SAE 303 – Application responsive et interactive',
                'description' => 'Conception et développement d’une application web responsive avec interactions riches et design adaptatif.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC24.02',
            'name' => 'Mettre en place ou développer un back office',
            'category' => 'Développé',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de la <strong>SAE 301</strong>, j’ai mis en œuvre mes compétences en développement web pour <strong>concevoir et développer un back office</strong> dédié à la gestion de contenu et d'utilisateurs d’un projet professionnel.</p>

<p>Ce back office intègre des fonctionnalités essentielles : affichage, modification et suppression de données issues d'une base SQL, sécurisation de l'accès par authentification, et interface intuitive pour les administrateurs.</p>

<p>En m’appuyant sur les connaissances acquises dans la ressource <strong>R316 – Gestion de projet</strong>, j’ai structuré efficacement le développement de cette interface, garantissant une <strong>organisation claire, une ergonomie adaptée</strong> et une maintenance facilitée pour les futurs utilisateurs.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'SAE 301 – Interface de back office pour gestion de projet',
                'description' => 'Conception et développement d’un back office fonctionnel pour l’administration d’un projet professionnel.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC24.02.S4',
            'name' => 'Mettre en place ou développer un back office (S4)',
            'category' => 'Développé',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de la <strong>ressource R407</strong>, j’ai approfondi mes compétences en back-end en <strong>développant une API REST avec le framework Symfony</strong>.</p>

<p>Ce back office s’articule autour d’une architecture moderne, où un <strong>serveur front-end Vue.js</strong> consomme les données exposées par l’API. J’ai mis en place les <strong>entités nécessaires</strong> au bon fonctionnement de l’application, comme les formulaires de saisie (ex. : formulaire fournisseur), tout en respectant les bonnes pratiques de sécurité, de structuration et d’accès aux données.</p>

<p>Ce projet m’a permis de maîtriser <strong>l’interconnexion entre un front Vue.js et un back Symfony</strong>, compétence indispensable pour tout projet de développement web à architecture découplée.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Développement d’un back office API avec Symfony et Vue.js',
                'description' => 'Mise en place d’une API Symfony interconnectée avec un front-end Vue.js pour la gestion d’entités métiers.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC24.03',
            'name' => 'Intégrer, produire ou développer des interactions riches ou des dispositifs interactifs',
            'category' => 'Développé',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de la <strong>SAE 303</strong>, j’ai mobilisé mes compétences en développement front-end, acquises notamment via la ressource <strong>R312 (Dev Font)</strong>, pour <strong>concevoir et intégrer des interactions riches</strong> au sein d’une application web interactive.</p>

<p>J’ai travaillé sur l’<strong>ergonomie</strong>, les <strong>animations</strong> et les <strong>réactions dynamiques de l’interface utilisateur</strong>, en veillant à offrir une expérience fluide et engageante. Ces éléments interactifs améliorent la navigation et renforcent l’impact des contenus proposés.</p>

<p>Cette mise en œuvre m’a permis de renforcer ma maîtrise des technologies front-end modernes (HTML, CSS, JavaScript, Vue.js) tout en mettant en valeur mes compétences dans la <strong>conception d’interfaces utilisateur interactives</strong>.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Développement d’interfaces interactives pour la SAE 303',
                'description' => 'Conception d’interactions riches et de dispositifs web interactifs favorisant l’engagement utilisateur.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC24.03.S4',
            'name' => 'Intégrer, produire ou développer des interactions riches ou des dispositifs interactifs (S4)',
            'category' => 'Développé',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre du projet <strong>SAE 402</strong>, j’ai participé à la <strong>conception d’un dispositif interactif</strong> original via une application web immersive. Nous avons imaginé un parcours narratif soutenu par une <strong>histoire écrite</strong>, des <strong>visuels intrigants</strong> et un <strong>sound design qualitatif</strong>.</p>

<p>J’ai exploité le framework <strong>Vue.js</strong> pour garantir une <strong>ergonomie fluide</strong> et une <strong>navigation libre</strong>, favorisant ainsi l’<strong>immersion utilisateur</strong> et l’interactivité du dispositif. Ce projet m’a permis de mettre en œuvre des compétences avancées en <strong>développement front-end</strong> et en conception d’<strong>expériences numériques engageantes</strong>.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Application web immersive sur le thème du double maléfique (SAE402)',
                'description' => 'Création d’un dispositif narratif interactif avec une interface fluide, des contenus multimédias et une navigation libre grâce à Vue.js.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC24.04',
            'name' => 'Modéliser les traitements d’une application Web',
            'category' => 'Développé',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de la <strong>SAE 301</strong>, j’ai mis en œuvre la compétence de <strong>modélisation des traitements</strong> pour une application web. Cette activité m’a permis d’analyser et de représenter de manière précise les <strong>flux de données</strong>, les <strong>logiques métier</strong> et les <strong>interactions</strong> nécessaires au bon fonctionnement du projet.</p>

<p>Grâce aux outils de modélisation appris en cours, j’ai pu formaliser les <strong>processus applicatifs</strong> sous forme de diagrammes (ex. diagrammes d’activités ou de séquence), facilitant ainsi le développement, la collaboration en équipe et la compréhension technique du projet. Cette modélisation a joué un rôle central dans l’assurance qualité et la robustesse de l’application web finale.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Projet SAE 301 : Application Web avec modélisation des traitements',
                'description' => 'Modélisation des traitements pour structurer la logique métier d’une application Web, en lien avec la gestion d’un back-office et le développement front/back.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC24.05',
            'name' => 'Optimiser une application web en termes de référencement et de temps de chargement',
            'category' => 'Développé',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre du projet <strong>SAE 301</strong>, j’ai appliqué mes compétences en <strong>optimisation web</strong> pour améliorer à la fois le <strong>référencement naturel (SEO)</strong> et le <strong>temps de chargement</strong> de l’application développée.</p>

<p>J’ai mis en œuvre des pratiques telles que l’<strong>optimisation des balises HTML sémantiques</strong>, la <strong>réduction du poids des médias</strong> (images compressées, lazy loading), la <strong>minification des fichiers CSS et JavaScript</strong>, ainsi que l’<strong’amélioration du temps de réponse serveur</strong>. Ces optimisations ont significativement contribué à la <strong>performance globale de l’application</strong> et à une meilleure accessibilité sur le web.</p>

<p>Les ressources <strong>R312 (Développement front-end)</strong> et <strong>R314 (Déploiement de service)</strong> ont été essentielles pour garantir une mise en production fluide, rapide et adaptée aux standards du web moderne.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Projet SAE 301 : Optimisation web',
                'description' => 'Optimisation d’une application web en termes de référencement naturel (SEO) et de performances techniques, pour une expérience utilisateur rapide et efficace.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC24.06',
            'name' => 'Configurer une solution d’hébergement adaptée aux besoins',
            'category' => 'Développé',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre du projet <strong>SAE 301</strong>, j’ai configuré une <strong>solution d’hébergement</strong> adaptée aux exigences du projet. J’ai utilisé un <strong>serveur VPS</strong> sur lequel j’ai installé et configuré les services nécessaires tels que <strong>Apache</strong>, <strong>PHP</strong>, <strong>MySQL</strong> et <strong>phpMyAdmin</strong>.</p>

<p>J’ai également mis en œuvre des techniques de <strong>sécurisation du serveur</strong> via SSH, et de <strong>déploiement continu</strong> grâce à l’intégration de GitHub pour gérer les versions de l’application. La structure d’hébergement choisie a permis une <strong>mise en ligne fiable, sécurisée et évolutive</strong> de l’application.</p>

<p>Cette configuration a été rendue possible grâce à l’acquisition de compétences en <strong>déploiement de service (R314)</strong>, essentielles pour garantir la stabilité et la performance de l’application web hébergée.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Projet SAE 301 : Configuration d’un serveur d’hébergement',
                'description' => 'Installation, configuration et sécurisation d’un serveur VPS pour le déploiement d’une application web avec GitHub, Apache, PHP et MySQL.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC15.01',
            'name' => 'Gérer un projet avec une méthode classique',
            'category' => 'Entreprendre',
            'year' => '1ème année',
            'description' => <<<HTML
<p>Nous avons utilisé avec succès <strong>Trello</strong> pour créer un tableau de bord de gestion des tâches et <strong>Google Sheets</strong> pour planifier les activités sur un calendrier partagé. Cette complémentarité des outils nous a permis une organisation fluide du travail, une meilleure collaboration et un suivi efficace de l'avancement de notre projet <strong>SAE202</strong>.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Organisation efficace du projet SAE202 avec Trello et Google Sheets',
                'description' => 'Utilisation conjointe de Trello et Google Sheets pour une gestion collaborative et un suivi optimal du projet.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC15.02',
            'name' => 'Budgéter un projet et suivre sa rentabilité',
            'category' => 'Entreprendre',
            'year' => '1ème année',
            'description' => <<<HTML
<p>Dans le cadre du projet <strong>SAE106</strong>, j'ai réalisé une budgétisation efficace en réfléchissant aux ressources nécessaires et aux coûts associés, ce qui m'a permis de planifier et suivre les dépenses. De plus, j'ai acquis des compétences en budgétisation grâce à la ressource <strong>R117</strong>, me permettant de suivre précisément l'avancement financier du projet.</p>
<p>Concernant le projet <strong>SAE202</strong>, notre groupe a été réparti en plusieurs ateliers distincts, m'amenant à suivre attentivement l'avancement de chaque équipe afin d'assurer la conformité du rendu final. Cette coordination a été essentielle pour garantir la cohérence et la réussite globale du projet.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Budgétisation et coordination pour les projets SAE106 et SAE202',
                'description' => 'Gestion précise du budget et suivi de la rentabilité ainsi que coordination des équipes pour assurer la réussite globale du projet.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC15.03',
            'name' => 'Découvrir les écosystèmes d’innovation numérique (fab labs, living labs, tiers-lieux, incubateurs…)',
            'category' => 'Entreprendre',
            'year' => '1ème année',
            'description' => <<<HTML
<p>Dans le cadre de mes projets, j'ai utilisé des outils de gestion tels qu'un <strong>diagramme de Gantt</strong> pour répartir structurellement les tâches et responsabilités au sein de l'équipe. Cette approche a permis d'organiser efficacement notre travail.</p>
<p>De plus, pour le projet <strong>SAE202</strong>, nous nous sommes répartis en ateliers distincts, tout en maintenant une cohérence globale. Ces stratégies de planification et de répartition ont été essentielles pour assurer une gestion efficace, une collaboration harmonieuse et l'atteinte de nos objectifs communs.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Gestion de projet avec méthodes éprouvées',
                'description' => 'Utilisation de diagrammes de Gantt et répartition structurée des tâches pour une gestion et collaboration efficaces au sein du projet SAE202.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC15.04',
            'name' => 'Analyser un produit ou un service innovant en identifiant les propositions de valeurs et en évaluant les solutions proposées',
            'category' => 'Entreprendre',
            'year' => '1ème année',
            'description' => <<<HTML
<p>Dans le cadre de la ressource <strong>R204</strong>, j'ai été chargé de rendre un site web <strong>éco-responsable</strong>. Pour atteindre cet objectif, j'ai mis en place des mesures visant à optimiser la consommation d'énergie, à minimiser les émissions de gaz à effet de serre et à favoriser l'utilisation de ressources durables.</p>
<p>J'ai également exploré des écosystèmes d'innovation numérique afin de découvrir de nouvelles solutions respectueuses de l'environnement dans le domaine du développement web. Cette démarche m'a permis de prendre conscience de l'importance de l'éco-responsabilité dans la conception et la gestion des sites web, contribuant ainsi à la préservation de notre environnement.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Optimisation éco-responsable d’un site web',
                'description' => 'Mise en place de mesures pour réduire l’empreinte environnementale d’un site web, intégrant des solutions durables et innovantes issues des écosystèmes numériques.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC15.05',
            'name' => 'Construire une présence en ligne professionnelle (personal branding)',
            'category' => 'Entreprendre',
            'year' => '1ème année',
            'description' => <<<HTML
<p>Dans le cadre du projet de la <strong>SAE201</strong>, mon groupe et moi avons été chargés d'analyser le service proposé par une application de déplacement à vélo écologique. Pour cela, nous avons examiné attentivement les fonctionnalités offertes par l'application <em>Komoot</em>.</p>
<p>Cette analyse nous a permis d'identifier les aspects qui pourraient être améliorés ou ajoutés à notre propre projet. Nous avons ainsi pu cibler les points forts et les faiblesses de l'application de référence, et proposer des fonctionnalités innovantes et adaptées aux besoins des utilisateurs de notre application de déplacement à vélo écologique.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Analyse et amélioration d’une application de mobilité écologique',
                'description' => 'Étude comparative de l’application Komoot pour proposer des fonctionnalités innovantes adaptées à un service de déplacement à vélo écologique.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC15.06',
            'name' => 'Interagir au sein des organisations',
            'category' => 'Entreprendre',
            'year' => '1ème année',
            'description' => <<<HTML
<p>Dans le cadre du projet de la <strong>SAE204</strong>, j'ai créé une présence en ligne et un CV vidéo pour mettre en valeur mes compétences et mon projet professionnel. J'ai réalisé une présentation détaillée de moi-même, en utilisant le logiciel <em>Canva</em> pour créer un contenu visuel attractif et professionnel.</p>
<p>Cette démarche m'a permis de développer mes compétences en communication et en présentation, tout en rendant mon profil plus impactant dans ma recherche de stage.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Création d’une présence en ligne et d’un CV vidéo',
                'description' => 'Utilisation de Canva pour concevoir un CV vidéo et une présence en ligne dynamique afin de valoriser mes compétences dans le cadre de ma recherche de stage.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC15.07',
            'name' => 'Produire un message écrit ou oral professionnel',
            'category' => 'Entreprendre',
            'year' => '1ème année',
            'description' => <<<HTML
<p>Dans ce module, j’ai développé mes compétences pour produire un message écrit ou oral de manière professionnelle. Cela inclut la structuration claire des idées, l’adaptation du ton et du style en fonction du public cible, ainsi que l’utilisation d’outils numériques pour enrichir la présentation.</p>
<p>J’ai mis en pratique ces compétences à travers la réalisation d’un CV vidéo, qui combine à la fois un message oral et une mise en forme visuelle professionnelle, facilitant ainsi ma communication auprès des recruteurs.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Création d’un CV vidéo professionnel',
                'description' => 'Conception et production d’un CV vidéo, intégrant un message oral clair et structuré, afin de valoriser mes compétences et mon parcours professionnel.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC25.01',
            'name' => 'Gérer un projet avec une méthode d’amélioration continue par exemple une méthode agile',
            'category' => 'Entreprendre',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre de l'AC2501, je développe la compétence de gérer un projet selon une méthode d'amélioration continue, telle qu'une approche agile. Ces compétences sont mises en pratique dans la <strong>SAE301</strong>, où je suis impliqué dans un projet professionnel nécessitant une gestion de projet efficace.</p>
<p>L'intégration des compétences en gestion de projet (R316) me permet d'adopter une approche agile favorisant l'adaptabilité, la collaboration et l'amélioration continue tout au long de ce projet.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Projet SAE301 : Gestion agile de projet',
                'description' => 'Application de la méthode agile pour assurer la gestion efficace et évolutive du projet, favorisant la collaboration et l’amélioration continue.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC25.02',
            'name' => 'Cartographier un écosystème (identification des acteurs, synthèse des propositions de valeur)',
            'category' => 'Entreprendre',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Au sein de l'AC2502, je développe la compétence de cartographier un écosystème, impliquant l'identification des acteurs et la synthèse des propositions de valeur. Cette compétence trouve son application dans la <strong>SAE301</strong>, où je suis engagé dans un projet nécessitant une compréhension approfondie de l'écosystème associé.</p>
<p>Les compétences en droit (R317) sont intégrées pour garantir une cartographie précise et conforme aux réglementations et exigences juridiques dans le cadre de ce projet.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Projet SAE301 : Cartographie d’un écosystème',
                'description' => 'Identification des acteurs et synthèse des propositions de valeur, avec un focus sur les aspects juridiques pour assurer conformité et pertinence.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC25.03',
            'name' => 'Initier la constitution d’un réseau professionnel',
            'category' => 'Entreprendre',
            'year' => '2ème année',
            'description' => <<<HTML
<p>L'AC2503 me permet de développer la compétence d'initier la constitution d'un réseau professionnel. Cette compétence est activement mise en œuvre dans les <strong>SAE301</strong> et <strong>SAE302</strong>, où je suis engagé dans des projets professionnels nécessitant l'établissement et l'extension d'un réseau professionnel.</p>
<p>Ces expériences contribuent non seulement au développement de compétences techniques, mais aussi à la création de relations professionnelles bénéfiques pour ma carrière.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Projets SAE301 & SAE302 : Constitution d’un réseau professionnel',
                'description' => 'Mise en place et développement d’un réseau professionnel utile à la fois pour les projets en cours et pour le futur professionnel.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC25.04',
            'name' => 'Collaborer au sein des organisations',
            'category' => 'Entreprendre',
            'year' => '2ème année',
            'description' => <<<HTML
<p>L'AC2504 me permet de développer la compétence de collaborer au sein des organisations. Cette compétence est activement mise en œuvre dans la <strong>SAE302</strong>, où je participe à un projet professionnel impliquant une collaboration étroite au sein d'une équipe.</p>
<p>Les compétences en anglais (<strong>R301</strong> et <strong>R302</strong>) et en rhétorique (<strong>R307</strong>) sont intégrées pour faciliter une communication efficace et une collaboration harmonieuse au sein de l'organisation.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Projet SAE302 : Collaboration en équipe',
                'description' => 'Participation à un projet professionnel nécessitant une collaboration efficace, avec un accent sur la communication en anglais et la rhétorique.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC25.04.S4',
            'name' => 'Collaborer au sein des organisations ( S4 )',
            'category' => 'Entreprendre',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Dans le cadre du projet <strong>SAE401</strong>, mon groupe et moi avons collaboré pour concevoir le site de jeux vidéo <strong>Greenplay</strong>. En partageant nos idées et responsabilités, nous avons pu développer un contenu cohérent et percutant, en utilisant nos compétences respectives en développement, design et hébergement.</p>
<p>Cette collaboration m'a permis de produire un site de jeux efficace, en ligne avec nos objectifs techniques et notre vision pour récompenser les joueurs.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Projet SAE401 : Collaboration pour le site Greenplay',
                'description' => 'Travail d’équipe autour du développement, du design et de l’hébergement pour créer un site de jeux vidéo performant et cohérent.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC25.05',
            'name' => 'Maitriser les codes des productions écrites et orales professionnelles',
            'category' => 'Entreprendre',
            'year' => '2ème année',
            'description' => <<<HTML
<p>L'<strong>AC2505</strong> me permet de développer la compétence de maîtriser les codes des productions écrites et orales professionnelles. Cette compétence est appliquée de manière significative dans la <strong>SAE302</strong>, où je participe à un projet professionnel nécessitant la production d'écrits et d'orales professionnels.</p>
<p>Les compétences en anglais (R301 et R302) ainsi que la maîtrise de la rhétorique (R307) sont intégrées pour assurer la qualité et l'efficacité des communications professionnelles dans le cadre de ce projet.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Projet SAE302 : Communication professionnelle écrite et orale',
                'description' => 'Production de documents écrits et oraux respectant les standards professionnels, intégrant des compétences linguistiques et rhétoriques.',
            ],
            'project_link' => '',
        ],
        [
            'code' => 'AC25.06',
            'name' => 'Prendre en compte les contraintes juridiques',
            'category' => 'Entreprendree',
            'year' => '2ème année',
            'description' => <<<HTML
<p>Au sein de l'<strong>AC2506</strong>, je développe la compétence de prendre en compte les contraintes juridiques. Cette compétence est appliquée dans les <strong>SAE301</strong> et <strong>SAE302</strong>, où je suis impliqué dans des projets professionnels exigeant une compréhension approfondie des contraintes juridiques associées.</p>
<p>Les compétences en droit (R317) sont intégrées pour garantir la conformité et la prise en compte adéquate des aspects juridiques dans la réalisation de ces projets.</p>
HTML,
            'image' => 'https://i.imgur.com/Fzlnx1M.png', // Pas d’image fournie
            'image_illustration' => '',
            'image_illustration2' => 'https://i.imgur.com/6wLjJ39.jpeg',
            'project' => [
                'title' => 'Projets SAE301 & SAE302 : Conformité juridique',
                'description' => 'Application des connaissances juridiques pour assurer la conformité légale des projets professionnels.',
            ],
            'project_link' => '',
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

    public function getFilteredSkills(?string $category = null, ?string $year = null): array
    {
        return array_filter($this->skills, function ($skill) use ($category, $year) {
            $matchCategory = !$category || (isset($skill['category']) && $skill['category'] === $category);
            $matchYear = !$year || (isset($skill['year']) && $skill['year'] === $year);
            return $matchCategory && $matchYear;
        });
    }

}
