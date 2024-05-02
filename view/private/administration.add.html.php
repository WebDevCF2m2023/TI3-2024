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
        <?php if(isset($error)): ?>
                <h2 class="text-center mb-4 text-danger"><?= $error ?></h2>
        <?php endif; ?>
        <h2 class="text-center mb-4 text-primary">Ajouter une nouvelle location.</h2>
        <form class="w-50 m-auto" method="POST">
    <div class="form-group">
        <label for="nom">Name</label>
        <input type="text" class="form-control" name="nom" id="nom" required>
    </div>
    <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" class="form-control" name="adresse" id="adresse" required>
    </div>
    <div class="form-group">
        <label for="codepostal">Code Postal</label>
        <input type="text" class="form-control" name="codepostal" id="codepostal" required pattern="\d{4}" title="Please enter exactly 4 digits">
    </div>
    <div class="form-group">
        <label for="ville">Ville</label>
        <input type="text" class="form-control" name="ville" id="ville" required>
    </div>
    <div class="form-group">
        <label for="nb_velos">Nombre de Vélos</label>
        <input type="number" class="form-control" name="nb_velos" id="nb_velos" required>
    </div>
    <div class="form-group">
        <label for="latitude">Latitude</label>
        <input type="number" class="form-control" name="latitude" id="latitude" step="0.0000001" required>
    </div>
    <div class="form-group">
        <label for="longitude">Longitude</label>
        <input type="number" class="form-control" name="longitude" id="longitude" step="0.0000001" required>
    </div>
    <button type="submit" class="btn btn-primary mt-3 w-50 d-block m-auto">Ajouter</button>
</form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>