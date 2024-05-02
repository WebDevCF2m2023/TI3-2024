<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Administration Delete</title>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            background-color: #494D5F;
            color: white;
        }

    </style>
</head>
<body>


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
        <label for="nom">Name</label>
        <input type="text" class="form-control" id="nom" disabled value="<?= $delete['nom'] ?>">
    </div>
    <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" class="form-control" id="adresse" disabled value="<?= $delete['adresse'] ?>">
    </div>
    <div class="form-group">
        <label for="codepostal">Code Postal</label>
        <input type="text" class="form-control" id="codepostal" disabled value="<?= $delete['codepostal'] ?>">
    </div>
    <div class="form-group">
        <label for="ville">Ville</label>
        <input type="text" class="form-control" id="ville" disabled value="<?= $delete['ville'] ?>">
    </div>
    <div class="form-group">
        <label for="nb_velos">Nombre de Vélos</label>
        <input type="number" class="form-control" id="nb_velos" disabled value="<?= $delete['nb_velos'] ?>">
    </div>
    <div class="form-group">
        <label for="latitude">Latitude</label>
        <input type="number" class="form-control" id="latitude" step="0.0000001" disabled value="<?= $delete['latitude'] ?>">
    </div>
    <div class="form-group">
        <label for="longitude">Longitude</label>
        <input type="number" class="form-control" id="longitude" step="0.0000001" disabled value="<?= $delete['longitude'] ?>">
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