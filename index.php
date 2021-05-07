<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bryan Prolong - Accueil</title>
    <?php include "./html/head.html"?>

    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <header>
        <?php
            global $page;
            $page = "accueil";
        ?>
        <?php include "./html/header.php" ?>
    </header>
    <main>
        <div id="home_presentation_div">
            <h1>Bryan PROLONG</h1>
            <p>Etudiant en BTS SIO à l’ENC Bessières à Paris, j’ai pour projet de devenir développeur indépendant afin de créer des logiciels et applications qui pourront aider les gens dans leur quotidien.</p>
            <p>Possesseur d'un BAC Pro Système Numérique avec mention Très Bien, je suis actuellement en deuxième année de BTS SIO et j'aimerais poursuivre en licence ou en bachelor puis en Master.</p>
            <p>Sur mon temps libre, je développe différents <a href="/projets">projets</a> et gère un petit collectif nommé Dynivers, avec lequel je réalise mes différents projets liés à l'informatique.</p>
        </div>
    </main>
</body>
</html>