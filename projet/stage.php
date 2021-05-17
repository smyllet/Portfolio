<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bryan Prolong - Stage</title>
    <?php include "../html/head.html"?>

    <link rel="stylesheet" href="/css/projet/global.css">
    <link rel="stylesheet" href="/css/projet/stage.css">
</head>
<body>
<header>
    <?php
    global $page;
    $page = "projets";
    ?>
    <?php include "../html/header.php" ?>
</header>
<main>
    <section>
        <div class="content-center">
            <div>
                <h1>Stage Umanis - TeamBuilder</h1>
                <p>
                    TeamBuilder est le projet sur lequel j'ai travaillé durant mon stage de deuxième année, le but de celui-ci est de proposer les consultants les plus adaptés à une mission donnée et inversement.
                </p>
            </div>
        </div>
        <div id="umanis-logo-container" class="image-center">
            <img src="/img/projet/stage/logo-transparent.png" alt="Logo Umanis">
        </div>
    </section>

    <section>
        <div id="javascript-icon-container" class="image-center">
            <img src="/img/javascript.png" alt="JavaScript logo">
        </div>
        <div class="content-center">
            <div>
                <h1>Technologies utilisées</h1>
                <p>
                    Le projet utilisait différents languages comme Java ou Python mais, pour ma part, je n'ai travaillé que sur le frontend. j'ai donc utilisé HTML, CSS et surtout JavaScript.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="content-center">
            <div>
                <h1>Tâches attribuées</h1>
                <p>
                    La tâche principale que l'on m'a attribuée a été la création de la page de recherche missions pour un CV ou un consultant donné. Les autres tâches consistaient principalement à des améliorations du javascript pour certaines fonctionnalités comme le système d'autocomplétion, qui devait pouvoir fonctionner avec le milieu du mot.
                </p>
            </div>
        </div>

        <div id="dev-icon-container" class="image-center">
            <img src="/img/development.svg" alt="Dev icon">
        </div>
    </section>

    <section>
        <div id="teams-icon-container" class="image-center">
            <img src="/img/projet/stage/teams.png" alt="Teams icon">
        </div>

        <div class="content-center">
            <div>
                <h1>Méthode de travail</h1>
                <p>
                    Étant donnée la situation sanitaire, je n'ai pu passer qu'une petite heure dans les locaux d'Umanis le premier jour. L'intégralité du stage s'est donc faite en distanciel. La communication se faisait par Teams, et une réunion pour faire un point sur l'avancement était organisée tous les lundis.
                    Le développement se faisait en méthode agile et nous devions remplir à chaque fin de journée un tableau avec ce que nous avions fait, ce que nous comptions faire le lendemain et les difficultés rencontrées.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="content-center">
            <div>
                <h1>Problèmes rencontrés</h1>
                <p>
                    Le projet étant principalement une accumulation de codes de différents stagiaires, une difficulté présente du début à la fin à été la compréhension du code déjà existant. En effet, chaque développeur ayant sa propre manière de coder, la logique n'était pas la même selon les différentes fonctions. J'ai donc dû passer plusieurs heures en début de stage, afin d'analyser l'intégralité du code source pour le comprendre.
                </p>
            </div>
        </div>

        <div id="error-icon-container" class="image-center">
            <img src="/img/error.svg" alt="Error icon">
        </div>
    </section>

    <section>
        <iframe src="/img/projet/stage/guide.pdf#view=fit"></iframe>
    </section>
</main>
</body>
</html>