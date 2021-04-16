<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bryan Prolong - Projets</title>
    <?php include "./html/head.html"?>

    <link rel="stylesheet" href="./css/parcours.css">
</head>
<body>
<header>
    <?php
    global $page;
    $page = "parcours";
    ?>
    <?php include "./html/header.php" ?>
</header>
<main>
    <section id="start">
        <div>
            <h1>Parcours de professionnalisation</h1>
        </div>
    </section>
    <section id="rentrée-2016">
        <div>
            <h1>Rentrée 2016</h1>
            <div>
                <h2>Entrée en Bac Pro Système Numérique</h2>
                <p>
                    Entrée au lycée pour préparer un BAC Pro Système Numérique option réseau afin d'acquérir des compétences en informatique et poursuivre ma carrière dans le développement.
                </p>
            </div>
            <div>
                <h2>Création de Dynivers</h2>
                <p>
                    Création du collectif Dynivers le 6 octobre 2016, projet qui a bientôt 5 ans sous lequel je crée la plupart de mes projets en développement, mais aussi d'autres choses liées à internet, tel que les lives Twitch ou des événements spécifiques à certains jeux. J’aimerais un jour professionnaliser ce projet, peut-être au point de gagner ma vie avec.
                </p>
            </div>
        </div>
    </section>
    <section id="année-2017-2018">
        <div>
            <div>
                <h2>Teku V1 & V2</h2>
                <p>
                    Premier projet de développement qui m'aura suivi pendant les 5 dernières années, Teku est un bot pour le service de chat Discord, il est développé en Node JS et communique avec discord via le package discord.js.
                    Dans sa première version, il ne fera que répondre à des commandes simples comme connaître le temps de latence de l'API ou faire des pile ou face. Il verra rapidement sa première refonte complète arriver, afin de mieux mettre en application les connaissances acquises durant la version 1. Cette refonte consistera en l'ajout de nouvelles fonctionnalités comme une commande de report et de suggestion, et même un système monétaire, qui ne sera finalement pas gardé.
                </p>
            </div>
            <div>
                <h2>Trouve le mot</h2>
                <p>
                    Trouve le mot est un petit jeu mobile en Java sur Android. Le jeu fournit une catégorie et une lettre, et il faut trouver le mot qui y correspond.
                </p>
            </div>
            <h1>2017-2018</h1>
        </div>
    </section>
    <section id="février-2019">
        <div>
            <h1>Février 2019</h1>
            <div>
                <h2>Pronote Notif Server</h2>
                <p>
                    C'est en février 2019, que ce projet en Node JS a vu le jour, il s'agissait d'un programme serveur qui récupérait régulièrement l'emploi du temps au format ICAL sur pronote, et qui devait envoyer une notification lorsqu'un changement était détecté par rapport à la version précédente.
                    Le projet ne restera qu'un prototype, puisque le lycée n'a finalement jamais activé la fonction d'exportation de l'emploi du temps.
                </p>
            </div>
        </div>
    </section>
    <section id="juin-septembre-2019">
        <div>
            <div>
                <h2>Obtention du BAC</h2>
                <p>
                    Obtention du BAC Pro Système Numérique option RISC avec mention très bien.
                </p>
            </div>
            <div>
                <h2>Entrée en BTS SIO</h2>
                <p>
                    Entrée à l'ENC Bessières pour la préparation d'un BTS SIO option SLAM
                </p>
            </div>
            <h1>Juin - Septembre 2019</h1>
        </div>
    </section>
    <section id="janvier-2020">
        <div>
            <h1>Janvier 2020</h1>
            <div>
                <h2>Teku V3</h2>
                <p>
                    Suite aux quelques projets réalisés les 3 années précédentes, j’ai décidé de faire une nouvelle refonte de mon bot discord, fort de mes nouvelles connaissances acquises au cours de mon premier mois de BTS. Cette version verra l'arrivée d'une base de données, la diffusion de musique dans les salons vocaux depuis YouTube ou des webradios, la récupération de fiches de films, de séries, etc. depuis le site de senscritique, et d'autres petites fonctionnalités de ce genre.
                </p>
            </div>
        </div>
    </section>
    <section id="mars-2020">
        <div>
            <div>
                <h2>Nombre et Mot Mystère</h2>
                <p>
                    Ce projet consistait en 2 petits jeux en ligne de commande Java, réalisés pour un devoir de BTS.
                    Le premier devait générer un nombre aléatoirement afin de le faire deviner à l'utilisateur avec un nombre d'essais limité. À chaque tentative, le programme indiquait si c'était plus ou moins.
                    Le deuxième demandait à un utilisateur de saisir un mot, un deuxième utilisateur avait ensuite un nombre de tentatives proportionnel au nombre de caractères du mot. À chaque tentative, les lettres correctes restaient affichées.
                </p>
            </div>
            <h1>Mars 2020</h1>
        </div>
    </section>
    <section id="mars-mai-2020">
        <div>
            <h1>Mars à Mai 2020</h1>
            <div>
                <h2>Stady</h2>
                <p>
                    Stady est un projet de fin de première année de BTS SIO que l’on devait réaliser en PHP à plusieurs. L'objectif était de créer un site permettant de suivre les stages des étudiants.
                    Ce projet ne sera pas entièrement terminé à cause de la situation sanitaire et d'un nombre de fonctionnalités prévu un peu trop ambitieux.
                </p>
            </div>
        </div>
    </section>
    <section id="juillet-aout-2020">
        <div>
            <div>
                <h2>VoIP to Discord</h2>
                <p>
                    L'objectif de ce projet était de connecter un numéro SIP à un bot Discord afin de pouvoir se connecter en vocal sur discord même sans internet.
                    Il sera dans un premier temps envisagé de le faire en Node JS, puisque je connaissais déjà discord.js, mais je me suis finalement rabattu sur Java car il s’agissait du seul langage que je maîtrisais tout en possédant une librairie fonctionnelle pour interagir avec de la VoIP.
                    Le projet sera finalement mis de côté à cause d’une librairie non mise à jour. Je ne parvenais pas à faire passer l'audio de la ligne téléphonique à Discord.
                </p>
            </div>
            <h1>Juillet-Aout 2020</h1>
        </div>
    </section>
    <section id="novembre-2020">
        <div>
            <h1>Novembre 2020</h1>
            <div>
                <h2>Disney Pins DataBase</h2>
                <p>
                    Disney Pins DataBase est un site développé en Node JS, référençant de manière participative les pins des différents parcs Disney du monde. Ce projet dispose aussi d'une API afin de pouvoir construire différents services à partir de cette base de données.
                    Le projet est actuellement en cours de développement et a pour but d'être présenté à l'épreuve E4 du BTS SIO. D'autres fonctionnalités sont prévues pour une éventuelle mise en production courant 2022, selon sa progression et s’il encourt des problèmes de droit.
                </p>
            </div>
        </div>
    </section>
    <section id="décembre-2020">
        <div>
            <div>
                <h2>Promo Étudiant</h2>
                <p>
                    Ce projet Java réalisé pour un devoir de BTS SIO devait permettre de gérer les moyennes d'une promotion d'étudiant, à travers une console de commande.
                </p>
            </div>
            <div>
                <h2>Teku V4</h2>
                <p>
                    Dernière refonte à l'heure actuelle, celle-ci a été un peu précipitée à cause de plusieurs mises à jour récentes ayant rendu une grande partie des fonctionnalités du bot inutilisables.
                    Cela a donc été l'occasion encore une fois de revoir le fonctionnement du bot pour mettre en application les connaissances acquises depuis la V3. Dans cette nouvelle version, les commandes sont maintenant gérées avec de la POO, la gestion de la musique à été rendue plus stable et de nouvelles fonctionnalités ont été implémentées.
                    Cette version a aussi été l'occasion de faire le tri dans certaines fonctionnalités n'étant pas indispensables ou n'étant pas en accord avec les RGPD entrant en application quelques mois plus tard.
                </p>
            </div>
            <h1>Décembre 2020</h1>
        </div>
    </section>
    <section id="janvier-mars-2021">
        <div>
            <h1>Janvier à Mars 2021</h1>
            <div>
                <h2>Stage Umanis</h2>
                <p>
                    Durant ce stage, j'ai pu participer à l'amélioration du frontend d'un service interne à Umanis permettant de faire correspondre des prestataires/CV avec des missions.
                    La grande majorité du développement que j'ai eu à faire était en JavaScript, ce qui m'a permis de renforcer mon niveau en JavaScript pur, étant plutôt habitué à l'utiliser avec Node JS.
                </p>
            </div>
        </div>
    </section>
    <section id="mars-2021">
        <div>
            <div>
                <h2>PortFolio</h2>
                <p>
                    Il s’agit de ce site, développé en PHP.
                </p>
            </div>
            <div>
                <h2>PokéCompare</h2>
                <p>
                    PokéCompare est un projet pour l'épreuve E4 du BTS SIO. Il a été développé pour une exécution sur navigateur, et permet de comparer deux Pokémon entre eux. Les informations sur les Pokémon sont récupérées via l'API pokéapi.co.
                </p>
            </div>
            <h1>Mars 2021</h1>
        </div>
    </section>
    <section id="next" hidden>
        <div>
            <h1>Et ensuite ?</h1>
        </div>
    </section>
</main>
</body>
</html>