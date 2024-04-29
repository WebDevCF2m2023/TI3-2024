<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Insertion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">GeoMapper</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
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
                    <div class="card-header bg-dark bg-gradient">
                        <h1 class="card-title mb-0 text-light">Admin Insertion</h1>
                        <p style="color: orange;" class="card-text">NOTE : Insertion d'un nouveau lieu dans la DB.</p>
                    </div>
                    <div class="card-body">

                        <?php if (isset($error)) echo "<div class='alert alert-danger' role='alert'>$error</div>"; ?>
                        <form action="" name="ourdatas" method="POST" class="mb-3">
                            <div class="form-group">
                                <h2>Ajoutez votre lieu</h2>
                            </div>
                            <div class="form-group">
                                <label for="nom">Nom du lieux</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
                            </div>
                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <textarea class="form-control" id="adresse" name="adresse" rows="3" placeholder="Adresse" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="codepostal">Code postal</label>
                                <input type="number" min="1" max="10000" class="form-control" id="codepostal" name="codepostal" rows="3" placeholder="Zip code" required></input>
                            </div>
                            <div class="form-group">
                                <label for="ville">Ville</label>
                                <textarea class="form-control" id="ville" name="ville" rows="3" placeholder="Ville" required></textarea>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="latitude">Latitude</label>
                                    <input type="number" step="0.00000000001" class="form-control" id="latitude" name="latitude" placeholder="La latitude" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="longitude">Longitude</label>
                                    <input type="number" step="0.00000000001" class="form-control" id="longitude" name="longitude" placeholder="La longitude" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mt-3 offset-5">Insérer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>