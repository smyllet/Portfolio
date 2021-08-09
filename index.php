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
            <p>Etudiant en Licence Pro CSID à l’IUT Montreuil, possesseur d'un BTS SIO ainsi que d'un BAC Pro Système Numérique avec mention Très Bien, j’ai pour projet de terminer mes études par un Master afin de pouvoir par la suite participer à la création de logiciels et applications qui pourront aider les gens dans leur quotidien.</p>
            <p>Sur mon temps libre, je fais du développement bénévole pour l'association <a href="https://www.ed92.org">ED92</a> et gère un petit collectif nommé Dynivers, avec lequel je réalise mes différents <a href="/projets">projets</a> liés à l'informatique.</p>

            <hr>

            <div id="home_social">
                <a href="https://github.com/smyllet">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" alt="logo github">
                </a>
                <a href="https://www.linkedin.com/in/bryan-prolong/">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="logo linkedin">
                </a>
            </div>
        </div>
    </main>
</body>
</html>