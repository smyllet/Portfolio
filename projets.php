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
    <div id="projets-filter">
        <div>
            <h1>Recherche Projets</h1>

            <div class="form-group">
                <label for="filter-search-input">Mots clé</label>
                <input id="filter-search-input" class="form-control" placeholder="Discord, Framework, Java,...">
            </div>


            <div class="filter-group">
                <div class="form-group">
                    <label for="filter-status">Status</label>
                    <select class="form-control shadow-none" id="filter-status">
                        <option value="all">Tous</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="filter-type">Type</label>
                    <select class="form-control shadow-none" id="filter-type">
                        <option value="all">Tous</option>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="filter-u4">
                    <label class="form-check-label" for="filter-u4">
                        Épreuve U4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="filter-opensource">
                    <label class="form-check-label" for="filter-opensource">
                        Open Source
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div id="projets-container">
        <div id="projets-loading">
            <h2>Récupération des projets</h2>
            <div class="lds-dual-ring"></div>
        </div>
    </div>
</main>
<template id="projet-nothing-template">
    <div class="projet-nothing">
        <h2>Aucun projet</h2>
    </div>
</template>
<template id="projet-template">
    <div class="projet">
        <div class="projet-info">
            <h3 class="projet-name"></h3>
            <p class="projet-description"></p>
        </div>
        <div class="projet-detail">
            <div class="projet-st">
                <div>
                    <h6>Status</h6>
                    <p class="projet-status">Inconnu</p>
                </div>
                <div>
                    <h6>Type</h6>
                    <p class="projet-type">Inconnu</p>
                </div>
            </div>

            <p class="projet-u4" style="display: none">Projet présenté à l'épreuve U4 du BTS SIO</p>

            <div class="projet-langage-container">
                <h6>Language utilisé</h6>
                <p class="projet-langage"></p>
            </div>

            <div class="projet-buttons">
                <!-- insertion des boutons détail et github -->
            </div>
        </div>
    </div>
</template>
</body>
</html>