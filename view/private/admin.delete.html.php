<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Supprimer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">GeoMapper<img src="./img/admin.png" alt="admin"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"><img src="./img/menu.png" width="30px" alt="menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Accueil Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?insert">Ajouter une data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?disconnect">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-danger">
                        <h1 class="card-title mb-0 text-light">ADMIN SUPRIMER</h1>
                        <p class="card-text text-warning">NOTE : DELETE d'un lieu dans la DB.</p>
                    </div>
                    <div class="card-body">

                        <?php if (isset($message)) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= $message ?>
                            </div>
                        <?php elseif (isset($error)) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $error ?>
                            </div>
                        <?php else : ?>
                            <div class="mb-4">
                                <h4 class="text-lg">Nom du lieux : <?= $data['nom'] ?></h4>
                                <p class="text-lg"><?= $data['adresse'] ?></p>
                                <p class="text-lg"><?= $data['codepostal'] ?></p>
                                <p class="text-lg"><?= $data['ville'] ?></p>
                                <p class="text-lg">Latitude : <?= $data['latitude'] ?></p>
                                <p class="text-lg">Longitude : <?= $data['longitude'] ?></p>
                            </div>
                            <hr>
                            <h2>Voulez-vous supprimer ce lieux de la DB ?</h2>
                            <div class="d-flex justify-content-between mt-4">
                                <a href="?delete=<?= $data['id'] ?>&confirm" class="btn btn-danger">Oui</a>
                                <a href="./" class="btn btn-success">Non</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>