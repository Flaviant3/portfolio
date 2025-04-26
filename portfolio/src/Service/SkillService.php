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

    public function getFilteredSkills(?string $category = null, ?string $year = null): array
    {
        return array_filter($this->skills, function ($skill) use ($category, $year) {
            $matchCategory = !$category || (isset($skill['category']) && $skill['category'] === $category);
            $matchYear = !$year || (isset($skill['year']) && $skill['year'] === $year);
            return $matchCategory && $matchYear;
        });
    }

}
