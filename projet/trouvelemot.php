<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bryan Prolong - Trouve le mot</title>
    <?php include "../html/head.html"?>

    <link rel="stylesheet" href="/css/projet/global.css">
    <link rel="stylesheet" href="/css/projet/trouvelemot.css">
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
                <h1>Trouve le mot</h1>
                <p>
                    Trouve le mot est un petit jeu mobile en Java sur Android. Le jeu fournit une catégorie et une lettre, et il faut trouver le mot qui y correspond.
                    Ce projet a été réalisé en 2018 dans l'objectif de découvrir le développement mobile et java.
                </p>
                <div class="button-group">
                    <a href="https://play.google.com/store/apps/details?id=fr.dynivers.trouvelemot"><button class="btn btn-info">Play Store</button></a>
                    <a href="https://github.com/smyllet/TrouveLeMot"><button class="btn btn-dark">GitHub</button></a>
                </div>
            </div>
        </div>
        <div id="trouvelemot-icon-container" class="image-center">
            <img src="/img/trouvelemot.png" alt="Trouve le mot logo">
        </div>
    </section>

    <section>
        <div id="android-icon-container" class="image-center">
            <img src="/img/android.svg" alt="Android Icon">
        </div>

        <div class="content-center">
            <div>
                <h1>Technologies utilisées</h1>
                <p>
                    L'application est développé en Java sur Android, les vues quand à elles sont faites en XML
                </p>
            </div>
        </div>
    </section>
</main>
</body>
</html>