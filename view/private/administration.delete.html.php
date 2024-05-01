<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Administration Delete</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4 bg-dark sticky-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">TI3_2024</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./?administration">Panel administration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?disconnect">Se deconnecter</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if(is_string($delete)): ?>
                <h2 class="text-center mb-4 text-danger"><?= $delete ?></h2>
        <?php else: ?>
            <?php if(isset($error)): ?>
                    <h2 class="text-center mb-4 text-danger"><?= $error ?></h2>
            <?php endif; ?>
            <h2 class="text-center mb-4 text-primary">Supprimer la localisation avec comme ID <?= $delete['id'] ?></h2>
                <form class="w-50 m-auto" method="GET">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" name="name" id="name" disabled value="<?= $delete['nom'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" id="type" disabled value="<?= $delete['type'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" name="adresse" id="adresse" disabled value="<?= $delete['adresse'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="codepostal">Code Postal</label>
                        <input type="text" class="form-control" name="codePostal" id="codepostal" disabled value="<?= $delete['codepostal'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="country">Ville</label>
                        <input type="text" class="form-control" name="country" id="country" disabled value="<?= $delete['ville'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="url">Lien du site</label>
                        <input type="text" class="form-control" name="url" id="url" disabled value="<?= $delete['url'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="lat">Latitude</label>
                        <input type="number" class="form-control" name="latitude" id="lat" step="0.0000001" disabled value="<?= $delete['latitude'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="long">Longitude</label>
                        <input type="number" class="form-control" name="longitude" id="long" step="0.0000001" disabled value="<?= $delete['longitude'] ?>">
                    </div>
                    <input type="hidden" name="delete" value="<?= $delete['id'] ?>">
                    <div class="">
                        <button type="submit" class="btn btn-danger mt-3" name="ok">Supprimer</button>
                        <button type="submit" class="btn btn-primary mt-3 ms-2" name="ko">Ne pas supprimer</button>
                    </div>
                </form>
        <?php endif ?>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>