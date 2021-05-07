<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bryan Prolong - PokéCompare</title>
    <?php include "../html/head.html"?>

    <link rel="stylesheet" href="/css/projet/global.css">
    <link rel="stylesheet" href="/css/projet/pokecompare.css">
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
                <h1>PokéCompare</h1>
                <p>
                    PokéCompare est une application web permettant de comparer entre eux deux Pokémon. Un système de filtre est disponible pour pouvoir comparer leurs attaques. Il est aussi possible de rechercher un Pokémon à partir des zones d’apparition d’un autre.
                </p>
                <div class="button-group">
                    <a href="https://bryanprolong.fr/pokecompare"><button class="btn btn-info">Demo</button></a>
                    <a href="https://github.com/smyllet/PokeCompare"><button class="btn btn-dark">GitHub</button></a>
                </div>
            </div>
        </div>
        <div id="pokemon-icon-container" class="image-center">
            <img src="/img/pokemon.png" alt="DPokémon 25ans logo">
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
                    Cette application a été conçue pour ne nécessiter aucun traitement côté serveur, elle utilise donc principalement du JavaScript ainsi qu’un peu de HTML et CSS.
                    Pour les Pokémon, aucune base de données n’est présente, les données sont récupérées grâce au Framework javascript AXIOS auprès de la PokéAPI.
                </p>

            </div>
        </div>
    </section>

    <section>
        <div class="content-center">
            <div>
                <h1>Fonctionnalités</h1>
                <p>
                    Le service permet de : Rechercher un Pokémon via son nom (en anglais) dans un champ autocomplété ou via son numéro de Pokédex, comparer les statistiques des Pokémon via un code couleur, connaitre leurs attaques en commun, rechercher une attaque et connaitre les zones d’apparition du Pokémon.
                </p>
            </div>
        </div>
        <div id="fonction-icon-container" class="image-center">
            <img src="/img/functionality-icon.png" alt="fonctionnalité logo">
        </div>
    </section>

    <section>
        <div id="bug-icon-container" class="image-center">
            <img src="/img/bug_ilus.png" alt="Bug Icon">
        </div>

        <div class="content-center">
            <div>
                <h1>Problèmes rencontrés</h1>
                <p>
                    Le problème principal rencontré a été l’éparpillement des informations dans l’API. Il était par exemple impossible de récupérer les informations françaises d’un Pokémon et ses caractéristiques dans une même requête. Ce problème est encore plus embêtant en ce qui concerne les attaques d’un Pokémon : il était nécessaire de faire une requête par attaque pour obtenir ses informations détaillées, ce qui peut vite engendrer un nombre assez conséquent de requêtes. La solution a donc été de ne récupérer que le détail de celle où l’utilisateur a cliqué et de les stocker dans une variable afin de limiter le nombre de requêtes à l’API.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div id="request-api-container" class="image-center">
            <img src="/img/pokecompare-api-request.svg" alt="Diagramme des requêtes vers la pokéapi">
        </div>

        <div class="content-center" id="request-api-text-container">
            <h1>Requêtes API</h1>
        </div>
    </section>
</main>
</body>
</html>