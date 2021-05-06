<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bryan Prolong - Teku</title>
    <?php include "../html/head.html"?>

    <link rel="stylesheet" href="/css/projet/global.css">
    <link rel="stylesheet" href="/css/projet/teku.css">
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
                <h1>Teku</h1>
                <p>
                    Teku est un bot pour le service de tchat Discord, il a été développer pour le serveur Dynivers afin d'amélioré la modération et d'ajouter de nouvelle fonctionnalité au serveur.
                    Sont développement à commencé en 2017 et il en est actuellement à sa version 4.
                </p>
            </div>
        </div>
        <div id="discord-icon-container" class="image-center">
            <img src="/img/Discord-Logo-White.svg" alt="Discord logo">
        </div>
    </section>

    <section>
        <div id="nodejs-icon-container" class="image-center">
            <img src="https://nodejs.org/static/images/logo.svg" alt="logo nodejs">
        </div>
        <div class="content-center">
            <div>
                <h1>Technologies utilisées</h1>
                <p>
                    Il a été développé en Node JS avec la librairie Discord.JS pour la connexion avec Discord
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="content-center">
            <div>
                <h1>Test et mise en production</h1>
                <p>
                    Le développement ce déroule sur un serveur Discord de test reproduisant à l'identique le serveur original.
                    Avant la mise en production, les éventuelles nouveauté sur le serveur de test sont répercuté sur le serveur de production. Le bot est ensuite éteint, cloné depuis le github, la configuration et mise à jour si nécessaire puis le bot et relancé.
                    Toutes les commandes et fonctionnalité sont à nouveau testé (manuellement pour l'instant) une fois sur le serveur en production afin de vérifier qu'il n'y a eu aucune erreur.
                    Les utilisateurs sont ensuite informé des nouveauté et de comment les utilisés. Si un utilisateur signal un bug, en cas de problème critique, il est corrigé au plus vite dans une mise à jour lui étant dédier, sinon une issue github est créer afin qu'il sois corrigé dans la prochaine version.
                </p>
            </div>
        </div>
        <div id="debug-icon-container" class="image-center">
            <img src="/img/debug.svg" alt="image debug">
        </div>
    </section>

    <section>
        <div id="learn-icon-container" class="image-center">
            <img src="/img/development.svg" alt="image learn">
        </div>
        <div class="content-center">
            <div>
                <h1>Apprentissage</h1>
                <p>
                    Etant mon premier projet, Teku m'a permis d'apprendre les bases du développement ainsi que le javascript, il m'a aussi permit de mettre en application de manière concrete ce que j'ai appris durant ma formation (comme la POO ou les tests unitaire)
                    Je pense que ce projet à autant apporté à ma formation que ce que ma formation lui apporte.</p>
            </div>
        </div>
    </section>
</main>
</body>
</html>