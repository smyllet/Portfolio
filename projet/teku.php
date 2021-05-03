<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bryan Prolong - Teku</title>
    <?php include "../html/head.html"?>

    <link rel="stylesheet" href="/css/projet/teku.css">
</head>
<body>
<header>
    <?php
    global $page;
    $page = "projet";
    ?>
    <?php include "../html/header.php" ?>
</header>
<main>
    <h1>Teku</h1>
    <section>
        <h2>Présentation</h2>
        <p>
            Teku est un bot pour le service de tchat Discord, il a été développer pour le serveur Dynivers afin d'amélioré la modération et d'ajouter de nouvelle fonctionnalité au serveur.
            Sont développement à commencé en 2017 et il en est actuellement à sa version 4.
        </p>
    </section>
    <section>
        <h2>Technologie</h2>
        <p>Il a été développer en Node JS avec la librairie Discord.JS pour la connexion avec Discord</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Node.js_logo.svg" alt="logo nodejs">
    </section>
    <section>
        <h2>Test et mise en production</h2>
        <p>
            Le développement ce déroule sur un serveur Discord de test reproduisant à l'identique le serveur original.
            Avant la mise en production, les éventuelles nouveauté sur le serveur de test sont répercuté sur le serveur de production. Le bot est ensuite éteint, cloné depuis le github, la configuration et mise à jour si nécessaire puis le bot et relancé.
            Toutes les commandes et fonctionnalité sont à nouveau testé (manuellement pour l'instant) une fois sur le serveur en production afin de vérifier qu'il n'y a eu aucune erreur.
            Les utilisateurs sont ensuite informé des nouveauté et de comment les utilisés. Si un utilisateur signal un bug, en cas de problème critique, il est corrigé au plus vite dans une mise à jour lui étant dédier, sinon une issue github est créer afin qu'il sois corrigé dans la prochaine version.
        </p>
    </section>
    <section>
        <h2>Apprentissage</h2>
        <p>
            Etant mon premier projet, Teku m'a permis d'apprendre les bases du développement ainsi que le javascript, il m'a aussi permit de mettre en application de manière concrete ce que j'ai appris durant ma formation (comme la POO ou les tests unitaire)
            Je pense que ce projet à autant apporté à ma formation que ce que ma formation lui apporte.
        </p>
    </section>
</main>
</body>
</html>