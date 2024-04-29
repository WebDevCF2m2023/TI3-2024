<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin Editor</title>
</head>

<body class="antialiased text-gray-900">

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

    <main class="container py-6">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-sm-12 card shadow-sm">
                <div class="card-header bg-dark bg-gradient text-light">
                    <h1 class="card-title">Admin Update</h1>
                    <p class="card-text text-warning">NOTE: mis à jour de la DB.</p>
                </div>
                <div class="card-body">

                    <?php if (isset($error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error ?>
                        </div>
                    <?php endif; ?>

                    <form action="" name="ourdatas" method="POST">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom du lieux</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" value="<?= $data['nom'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="adresse" class="form-label">Adresse</label>
                            <textarea class="form-control" id="adresse" name="adresse" placeholder="Adresse" required><?= $data['adresse'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="codepostal" class="form-label">Code Postal</label>
                            <textarea class="form-control" id="codepostal" name="codepostal" placeholder="Zip Code" required><?= $data['codepostal'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="ville" class="form-label">Ville</label>
                            <textarea class="form-control" id="ville" name="ville" placeholder="Ville" required><?= $data['ville'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="latitude" class="form-label">Latitude</label>
                            <input type="number" step="0.00000000001" class="form-control" id="latitude" name="latitude" placeholder="latitude" value="<?= $data['latitude'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="longitude" class="form-label">Longitude</label>
                            <input type="number" step="0.00000000001" class="form-control" id="longitude" name="longitude" placeholder="longitude" value="<?= $data['longitude'] ?>" required>
                        </div>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>" />
                        <button type="submit" class="btn btn-success">Modifier</button>
                    </form>
                </div>
            </div </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>