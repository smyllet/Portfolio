<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bryan Prolong - Projets</title>
    <?php include "./html/head.html"?>

    <link rel="stylesheet" href="./css/projets.css">
    <script src="./javascript/projets.js"></script>
</head>
<body>
<header>
    <?php
    global $page;
    $page = "projets";
    ?>
    <?php include "./html/header.php" ?>
</header>
<main>
    <a id="previous" class="arrow">&#10094</a>
    <div id="carousel">
        <section class="active">
            <h1>Disney Pins DataBase</h1>
            <p>Disney Pins DataBase est une API répertoriant tous les Pins des différents parcs Disneyland.</p>
            <p>Ce projet à été réalisé dans le but d'être présenté à l'épreuve E4 de BTS SIO.</p>
            <a class="btn btn-dark" href="/projet/teku">Voir plus</a>
        </section>
        <section>
            <h1>Poké Compare</h1>
            <p>Poké Compare est un site permettant de comparer, deux Pokémon entre eux.</p>
            <p>Ce projet à été réalisé dans le but d'être présenté à l'épreuve E4 de BTS SIO.</p>
        </section>
        <section>
            <h1>Teku (Bot Discord)</h1>
            <p>Teku est un tchat bot pour discord permettant différente chose comme la modération avancé du serveur, l’obtentions de fiche détailler dans le tchat sur des films, jeu vidéo, livre et autre grâce au site senscritique, l’écoute de musique dans les salons vocaux depuis YouTube . . .</p>
            <a class="btn btn-dark" href="/projet/teku">Voir plus</a>
        </section>
        <section>
            <h1>Portfolio</h1>
            <p>Portfolio pour l'épreuve E6 du BTS SIO.</p>
        </section>
        <section>
            <h1>VOIP to Discord</h1>
            <p>L'objectif est de connecter une ligne SIP via un bot à un salon vocal sur Discord.</p>
        </section>
        <section>
            <h1>Pronote Notif Server</h1>
            <p>L'objectif était de vérifier régulièrement l'emploie du temps Pronote afin de pouvoir envoyé une notification lorsque qu'un cours était déplacer ou annulé.</p>
        </section>
    </div>
    <a id="next" class="arrow">&#10095</a>
</main>
</body>
</html>