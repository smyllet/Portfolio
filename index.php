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
        </div>
    </main>
</body>
</html>