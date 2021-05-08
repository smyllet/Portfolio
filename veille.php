<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bryan Prolong - Veille Technologique</title>
    <?php include "./html/head.html"?>

    <link rel="stylesheet" href="./css/veille.css">
    <script src="./javascript/veille.js"></script>
</head>
<body>
<header>
    <?php
    global $page;
    $page = "veille";
    ?>
    <?php include "./html/header.php" ?>
</header>
<main class="loading">
    <section id="loading-screen">
        <div>
            <h1>Veille technologique</h1>
            <div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 0" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h6 id="loading-screen-text">Récupération de la veille technologique</h6>
            </div>
        </div>
    </section>
    <section id="main-section">
        <div class="content-center">
            <div>
                <h1>Révolution native avec Flutter</h1>
                <p>
                    Flutter est un framework open source créer par Google en 2017 pour la conception d'interface utilisateur. Il permet de développer des applications qui serons ensuite compilées en application natif Android, IOS, Web et Bureau.
                    <br>
                    Le language utilisé par ce framework et le Dart, proposé par Google en 2011, il s'agit d'un language orienté objet.
                </p>
            </div>
        </div>
        <div style="background-color: #B3E6FB" class="image-center">
            <img src="/img/veille/flutter.png" alt="Logo Flutter"/>
        </div>
    </section>
</main>
</body>
</html>