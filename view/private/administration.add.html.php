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
                    <a class="nav-link active" href="/?administration">Panel Administration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/?disconnect">Se deconnecter</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if(isset($error)): ?>
                <h2 class="text-center mb-4 text-danger"><?= $error ?></h2>
        <?php endif; ?>
        <h2 class="text-center mb-4 text-primary">Ajouter une nouvelle location.</h2>
        <form class="w-50 m-auto" method="POST">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nom" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Type" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse" required>
            </div>
            <div class="form-group">
                <label for="codepostal">Code Postal</label>
                <input type="text" class="form-control" name="codePostal" id="codepostal" placeholder="Code Postal" required>
            </div>
            <div class="form-group">
                <label for="country">Ville</label>
                <input type="text" class="form-control" name="country" id="country" placeholder="Ville" required>
            </div>
            <div class="form-group">
                <label for="url">Lien du site</label>
                <input type="text" class="form-control" name="url" id="url" placeholder="Lien du site" required>
            </div>
            <div class="form-group">
                <label for="lat">Latitude</label>
                <input type="number" class="form-control" name="latitude" id="lat" step="0.0000001" placeholder="50.25647" required>
            </div>
            <div class="form-group">
                <label for="long">Longitude</label>
                <input type="number" class="form-control" name="longitude" id="long" step="0.0000001" placeholder="1.21456" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-50 d-block m-auto">Ajouter</button>
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>