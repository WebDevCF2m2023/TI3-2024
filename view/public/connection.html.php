<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/favicon-32x32.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success mb-5 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-3 text-light link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="/">Centres Culturels</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    
    <div class="container col-6  mt-5 p-5 border border-success rounded-5">
        <form method="POST">
            <?php if(isset($error)): ?>
                <p class="text-danger"><?= $error === false ? "Nom de compte ou mot de passe incorrect" : $error ?></p>
            <?php endif ?>
            <div class="lg-mb-3">
                <label for="user" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control border border-success" id="user" aria-describedby="user" name="user">
            </div>
            <div class="lg-mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control border border-success" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-success mt-5 w-auto d-block m-auto">Se connecter</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>