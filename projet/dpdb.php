<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bryan Prolong - Disney Pins DataBase</title>
    <?php include "../html/head.html"?>

    <link rel="stylesheet" href="/css/projet/global.css">
    <link rel="stylesheet" href="/css/projet/dpdb.css">
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
                <h1>Disney Pins DataBase</h1>
                <p>
                    Disney Pins DataBase est un service pour répertorier les pins des différents parcs Disneyland du monde. L’objectif était de permettre au collectionneur de pouvoir retrouver facilement tous les pins facilement à un seul endroit. Un système de contribution a été mis en place pour aider à référencer les différents pins sortis depuis l’ouverture des parcs. Une API a aussi été mise en place afin de pouvoir créer différentes applications à partir de cette base de données.
                </p>
                <div class="button-group">
                    <a href="https://github.com/smyllet/DisneyPinsDataBase"><button class="btn btn-dark">GitHub</button></a>
                </div>
            </div>
        </div>
        <div id="disney-icon-container" class="image-center">
            <img src="/img/disneyland-paris-vector-logo.svg" alt="Disneyland paris logo">
        </div>
    </section>

    <section>
        <div id="motivation-icon-container" class="image-center">
            <img src="/img/motivation.png" alt="Motivation Icon">
        </div>

        <div class="content-center">
            <div>
                <h1>Motivations</h1>
                <p>
                    Etant régulièrement à Disneyland Paris, je communique souvent avec des collectionneurs de pins. Au fil des discussions, nous avons remarqué qu’il n’y avait aucun service les référençant. Il est donc tout naturel, lorsqu'on a dû choisir nos projets pour le BTS, que l'un d'eux se soit orienté vers cette thématique.
                </p>

            </div>
        </div>
    </section>

    <section>
        <div class="content-center">
            <div>
                <h1>Technologies utilisées</h1>
                <p>
                    Je me suis orienté sur Node JS (javascript) car il s’agit du langage que je maîtrise le mieux. De plus, il permettait de mettre en place un service web de manière autonome (sans serveur apache ou Nginx) grâce à la librairie Express.
                    Concernant la base de données, j’ai choisi MySQL car elle était simple et légère à mettre en place, et qu’elle offrait toutes les fonctionnalités dont j’avais besoin.
                </p>
            </div>
        </div>
        <div id="sql-icon-container" class="image-center">
            <img src="https://upload.wikimedia.org/wikipedia/fr/6/62/MySQL.svg" alt="MySQL logo">
        </div>
    </section>

    <section>
        <div id="fonction-icon-container" class="image-center">
            <img src="/img/functionality-icon.png" alt="Fonctionality Icon">
        </div>

        <div class="content-center">
            <div>
                <h1>Fonctionnalités</h1>
                <p>
                    Actuellement, le service permet de : s’inscrire et se connecter, faire une demande pour devenir contributeur ou développeur, ajouter un pins, accepter les demandes pour être contributeur et développeur.
                    L’API, quant à elle, permet actuellement d’obtenir la liste des Pins avec différents filtres. Elle permet aussi d’obtenir, par son ID, un pins, une collection, un personnage, une attraction, un type de pins, un parc et un pays.
                    L’application est disponible en français ou en anglais, suivant la langue du navigateur.
                </p>

            </div>
        </div>
    </section>

    <section>
        <div class="content-center">
            <div>
                <h1>Problèmes rencontrés</h1>
                <p>
                    L’interface utilisateur : ayant plus de connaissances Backend, le design m'a posé quelques difficultés lorsque j'ai souhaité créer l'interface, qui me paraît convenable malgré sa simplicité visuelle.
                </p>
            </div>
        </div>
        <div id="bug-icon-container" class="image-center">
            <img src="/img/bug_ilus.png" alt="Bug icon">
        </div>
    </section>

    <section>
        <div id="uml-container" class="image-center">
            <img src="/img/dpdb_uml.svg" alt="UML Disney Pins DataBase" class="uml">
        </div>

        <div class="content-center">
            <h1>Modélisation</h1>
        </div>
    </section>
</main>
</body>
</html>