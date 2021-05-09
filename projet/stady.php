<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bryan Prolong - Stady</title>
    <?php include "../html/head.html"?>

    <link rel="stylesheet" href="/css/projet/global.css">
    <link rel="stylesheet" href="/css/projet/stady.css">
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
                <h1>Stady</h1>
                <p>
                    Stady est un projet de fin de première année de BTS SIO que l’on devait réaliser en PHP à plusieurs. L'objectif était de créer un site permettant de suivre les stages des étudiants. Ce projet ne sera pas entièrement terminé à cause de la situation sanitaire et d'un nombre de fonctionnalités prévu un peu trop ambitieux.
                </p>
                <div class="button-group">
                    <a href="https://github.com/smyllet/stady"><button class="btn btn-dark">GitHub</button></a>
                </div>
            </div>
        </div>
        <div id="stady-icon-container" class="image-center">
            <img src="/img/projet/stady/stady_logo.png" alt="Disneyland paris logo">
        </div>
    </section>

    <section>
        <div id="php-icon-container" class="image-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="PHP logo">
        </div>
        <div class="content-center">
            <div>
                <h1>Technologies utilisées</h1>
                <p>
                    Nous avons développer ce projet en PHP, il s'agissait de l'une des consigne du devoir afin de nous permettre d'apprendre ce langage. Pour la base de donnée nous nous somme orienté sur MySQL, c'était en effet la seul que nous connaissions à ce moment là et elle remplissais très bien le rôle pour le quel nous en avions besoin.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="content-center">
            <div>
                <h1>Fonctionnalités Prévu</h1>
                <p>
                    A l'origine, le projet devais proposé un système de role (Proviseur, CPE, Professeur, Élève, Tuteur), gestion de profil et utilisateur, gestion des convention de stage, une messagerie lycée - entreprise, gestion des absence, un système d'évaluation du stagiaire en fin de stage, la possibilité pour un élève de donnée un code d'invitation à sa futur entreprise afin de permettre une inscription plus rapide sans dépendre de l'administration, . . .<br>
                </p>
                <p>
                    La plus part de ces fonctionnalité on été implémenté partiellement, certaine complètement, mais d'autre non pas vu le jour faute de temps.
                </p>
            </div>
        </div>

        <div id="fonction-icon-container" class="image-center">
            <img src="/img/functionality-icon.png" alt="Fonctionality Icon">
        </div>
    </section>

    <section>
        <div id="dev-icon-container" class="image-center">
            <img src="/img/development.svg" alt="Dev icon">
        </div>

        <div class="content-center">
            <div>
                <h1>Conception et Organisation</h1>
                <p>
                    Dans un premier temps nous avons réfléchi au fonctionnalité que devrait embarqué le projet ainsi que les roles disponible et leurs permission, ensuite nous avons répartie les taches en 3 parties : design, backend et frontend.
                    Personnellement je m'occupais du backend et de la conception de la base de donnée.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="content-center">
            <div>
                <h1>Problèmes rencontrés</h1>
                <p>
                    Le principal problème a été une mauvaise gestion du temps, ainsi qu'une mauvaise organisation. Le fronted n'avançais pas suffisamment vite par rapport au backend ce qui bloquai la progression et retardais le projet.
                </p>
            </div>
        </div>

        <div id="error-icon-container" class="image-center">
            <img src="/img/error.svg" alt="Error icon">
        </div>
    </section>

    <section id="carousel_section">
        <div>
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                    <li data-target="#carousel" data-slide-to="4"></li>
                    <li data-target="#carousel" data-slide-to="5"></li>
                    <li data-target="#carousel" data-slide-to="6"></li>
                    <li data-target="#carousel" data-slide-to="7"></li>
                    <li data-target="#carousel" data-slide-to="8"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/img/projet/stady/login_page.png" alt="screen stady">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/projet/stady/carnet_eleves_page.png" alt="screen stady">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/projet/stady/stage_page.png" alt="Tscreen stady">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/projet/stady/admin_page.png" alt="screen stady">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/projet/stady/ajout_profil_page.png" alt="screen stady">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/projet/stady/list_profil_page.png" alt="screen stady">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/projet/stady/ajout_classe_page.png" alt="screen stady">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/projet/stady/list_classe_page.png" alt="screen stady">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/projet/stady/param_page.png" alt="screen stady">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédents</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
        </div>
    </section>
</main>
</body>
</html>