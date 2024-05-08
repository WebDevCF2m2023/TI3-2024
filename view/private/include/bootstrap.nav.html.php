<nav class="navbar navbar-expand-lg mb-4 bg-dark sticky-top" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="./">TI3_2024</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php $administrator = isset($_GET['addLocation']) ||  isset($_GET['update']) ||  isset($_GET['delete']) || isset($_GET['administration']); ?>
            <li class="nav-item">
                <a class="nav-link <?= $administrator ? "" : "active" ?>" href="./">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $administrator ? "active" : "" ?>" href="./?administration">Panel administration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./?disconnect">Se deconnecter</a>
            </li>
        </ul>
        </div>
    </div>
</nav>