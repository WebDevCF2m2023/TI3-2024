<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/administration.css">
    <title>Administration Update</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4 bg-dark sticky-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">TI3_2024</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./">Accueil</a>
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
        <?php if(is_string($update)): ?>
                <h2 class="text-center mb-4 text-danger"><?= $update ?></h2>
        <?php else: ?>
            <?php if(isset($error)): ?>
                    <h2 class="text-center mb-4 text-danger"><?= $error ?></h2>
            <?php endif; ?>
                <h2 class="text-center mb-4 text-primary">Modifier la localisation avec comme ID <?= $update['id'] ?></h2>
                <form class="col-12 col-md-8 col-xl-6 m-auto needs-validation <?= isset($secure) ? 'was-validated' : ''?>" novalidate method="POST">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nom" pattern="^.{1,50}$" value="<?= isset($_POST["name"]) ? $_POST["name"] : $update["nom"]?>" required>
                        <div class="invalid-feedback">
                        Le nom ne doit pas être vide ou dépasser 50 caractères
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" id="type" placeholder="Type" pattern="^.{1,20}$" value="<?= isset($_POST["type"]) ? $_POST["type"] : $update["type"]?>" required>
                        <div class="invalid-feedback">
                        Le type ne doit pas être vide ou dépasser 20 caractères
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse" pattern="^.{1,100}$" value="<?= isset($_POST["adresse"]) ? $_POST["adresse"] : $update["adresse"]?>" required>
                        <div class="invalid-feedback">
                        L'adresse ne doit pas être vide ou dépasser 100 caractères
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="codepostal">Code Postal</label>
                        <input type="text" class="form-control" name="codePostal" id="codepostal" placeholder="Code Postal" pattern="^\d\d\d\d$" value="<?= isset($_POST["codePostal"]) ? $_POST["codePostal"] : $update["codepostal"]?>" required>
                        <div class="invalid-feedback">
                        Le Code Postal doit être constitué de 4 chiffres.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country">Ville</label>
                        <input type="text" class="form-control" name="country" id="country" placeholder="Ville" pattern="^.{1,20}$" value="<?= isset($_POST["country"]) ? $_POST["country"] : $update["ville"]?>" required>
                        <div class="invalid-feedback">
                        La ville ne doit pas être vide ou dépasser 20 caractères
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="url">Lien du site</label>
                        <input type="text" class="form-control" oninput="checkCorrectURL()" name="url" id="url" placeholder="Lien du site" pattern="^.{1,200}$" value="<?= isset($_POST["url"]) ? $_POST["url"] : $update["url"]?>" required>
                        <div class="checkUrl invalid-feedback">
                        Le lien du site ne doit pas être vide ou dépasser 200 caractères
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lat">Latitude</label>
                        <input type="text" class="form-control" name="latitude" id="lat" pattern="^-?\d{1,2}(\.\d{1,6})?$" placeholder="Exemple: 50.25647" value="<?= isset($_POST["latitude"]) ? $_POST["latitude"] : $update["latitude"]?>" required>
                        <div class="invalid-feedback">
                        Format de latitude incorrect. Exemple a suivre : 5.214578
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="long">Longitude</label>
                        <input type="text" class="form-control" name="longitude" id="long" pattern="^-?\d{1,2}(\.\d{1,6})?$" placeholder="Exemple: 1.21456" value="<?= isset($_POST["longitude"]) ? $_POST["longitude"] : $update["longitude"]?>" required>
                        <div class="invalid-feedback">
                        Format de longitude incorrect. Exemple a suivre : 50.214578
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 w-50 d-block m-auto">Modifier</button>
                </form>
        <?php endif ?>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/checkForm.js"></script>
</body>
</html>