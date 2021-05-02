<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bryan Prolong - Compétences</title>
    <?php include "./html/head.html"?>

    <link rel="stylesheet" href="./css/competences.css">
    <script src="./javascript/competences.js"></script>
</head>
<body>
<header>
    <?php
    global $page;
    $page = "competences";
    ?>
    <?php include "./html/header.php" ?>
</header>
<main>
    <section hidden>
        <div>
            <h1>DevOps</h1>
            <figure class="highcharts-figure">
                <div id="pie_skills"></div>
            </figure>
        </div>
    </section>
    <section>
        <div>
            <figure class="highcharts-figure">
                <div id="pie_development"></div>
            </figure>
            <h1>Développement</h1>
        </div>
    </section>
    <section>
        <div>
            <h1>Système</h1>
            <figure class="highcharts-figure">
                <div id="pie_system"></div>
            </figure>
        </div>
    </section>
</main>
</body>
</html>