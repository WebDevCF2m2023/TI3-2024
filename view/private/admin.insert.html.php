<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Administration | Suppression</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success mb-4 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-3 text-light link-dark link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover">Centres Culturels</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" name="name" name="name" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" aria-current="page" href="/?administration">Panel Administration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="/?disconnect">Se deconnecter</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container col-5 mt-5">
        <?php if(isset($error)): ?>
                <h2 class="text-center mb-4 text-danger"><?= $error ?></h2>
        <?php endif; ?>
        <h2 class="text-center mb-4 text-success text-uppercase fw-bold">Ajoutez un Centre Culturel.</h2>
        <form class="w-50 m-auto" method="POST">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control border-success mb-2" name="nom" id="nom" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control border-success mb-2" name="adresse" id="adresse" required>
            </div>
            <div class="form-group">
                <label for="codepostal">Code Postal</label>
                <input type="text" class="form-control border-success mb-2" name="codepostal" id="codepostal" required>
            </div>
            <div class="form-group">
                <label for="ville">Ville</label>
                <input type="text" class="form-control border-success mb-2" name="ville" id="ville" required>
            </div>
            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input type="number" class="form-control border-success mb-2" name="latitude" id="latitude" step="0.0000001" required>
            </div>
            <div class="form-group">
                <label for="longitude">longitude</label>
                <input type="number" class="form-control border-success mb-2" name="longitude" id="longitude" step="0.0000001" require>
            </div>
            <button type="submit" class="btn btn-success mt-5 w-50 d-block m-auto">Ajouter</button>
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>