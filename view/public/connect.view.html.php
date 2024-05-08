<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
    <title>Connexion</title>
</head>
<body>
<div class="container py-4">
    <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                 class="img-fluid" alt="Phone image">
        </div>
    </div>
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
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary me-md-2">Connexion</button>
                    <a class="btn btn-primary" href="./">Accueil</a>
                </div>
            </form>
        </div>
    </div>
    <?php
    //var_dump($_POST);
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
