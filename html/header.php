<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Bryan PROLONG</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Activer navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php if(!isset($page)) $page = "none" ?>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($page == "accueil") echo "active"?>">
                <a class="nav-link" href="/">Accueil</a>
            </li>
            <li class="nav-item <?php if($page == "cv") echo "active"?>">
                <a class="nav-link" href="/cv">CV</a>
            </li>
            <li class="nav-item <?php if($page == "competences") echo "active"?>">
                <a class="nav-link" href="/competences">Compétences</a>
            </li>
            <!--<li class="nav-item <?php if($page == "parcours") echo "active"?>">
                <a class="nav-link" href="/parcours">Parcours</a>
            </li>-->
            <li class="nav-item <?php if($page == "projets") echo "active"?>">
                <a class="nav-link" href="/projets">Projets</a>
            </li>
            <!--<li class="nav-item <?php if($page == "veille") echo "active"?>">
                <a class="nav-link" href="/veille">Veille Technologique</a>
            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="mailto:bryan.prolong@outlook.fr?subject=[Contact Portfolio]">Contact</a>
            </li>
        </ul>
    </div>
</nav>