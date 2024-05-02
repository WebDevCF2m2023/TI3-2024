<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Administration Delete</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success mb-4 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-3 text-light link-dark link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover">Centres Culturels</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" name="name" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark link-light link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover" aria-current="page" href="/?admin">Panel Administration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark link-light link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover" href="/?disconnect">Se deconnecter</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container col-5 mt-5">
        <?php if(is_string($delete)): ?>
                <h2 class="text-center mb-4 text-danger"><?= $delete ?></h2>
        <?php else: ?>
            <?php if(isset($error)): ?>
                    <h2 class="text-center mb-4 text-danger"><?= $error ?></h2>
            <?php endif; ?>
                <h2 class="text-center mb-4 text-success text-uppercase fw-bold">Supprimez un Centre Culturel ID <?= $delete['id'] ?></h2>
                <form class="w-50 m-auto" method="GET">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control border-success mb-2" id="nom" disabled value="<?= $delete['nom'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control border-success mb-2" id="adresse" disabled value="<?= $delete['adresse'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="codepostal">Code Postal</label>
                        <input type="text" class="form-control border-success mb-2" id="codepostal" disabled value="<?= $delete['codepostal'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="ville">Ville</label>
                        <input type="text" class="form-control border-success mb-2" id="ville" disabled value="<?= $delete['ville'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="long">Latitude</label>
                        <input type="number" class="form-control border-success mb-2" id="latitude" step="0.0000001" disabled value="<?= $delete['latitude'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="lat">Longitude</label>
                        <input type="number" class="form-control border-success mb-2" id="longitude" step="0.0000001" disabled value="<?= $delete['longitude'] ?>">
                    </div>
                    <input type="hidden" name="delete" value="<?= $delete['id'] ?>">
                    <div class="">
                        <button type="submit" class="btn btn-danger mt-4 ms-5" name="ok">Supprimer</button>
                        <button type="submit" class="btn btn-success mt-4 ms-5" name="ko">Ne pas supprimer</button>
                    </div>
                </form>
        <?php endif ?>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>