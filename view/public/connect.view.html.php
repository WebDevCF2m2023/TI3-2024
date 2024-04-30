<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Connexion</title>
</head>
<body>
<div class="container py-4">
    <h1 class="text-center">Connexion</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light my-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?connect">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="POST" name="connexion">
                <div class="mb-3">
                    <label for="username" class="form-label">Votre login</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="passwd" class="form-label">Votre mot de passe</label>
                    <input type="password" class="form-control" id="passwd" name="passwd" required>
                </div>
                <button type="submit" class="btn btn-primary">Connexion</button>
            </form>
        </div>
    </div>
    <?php
     //var_dump($_POST);
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-6uAhkp9lKBKZHpP5WfJFLtcveY5gRPfU8Q7i4vE5/5ySA3oW7guQ/nrCk2GOs9Hv" crossorigin="anonymous"></script>
</body>
</html>
