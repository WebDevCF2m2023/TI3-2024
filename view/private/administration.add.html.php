<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/administration.css">
    <title>Administration Insertion</title>
</head>
<body class="bg-light">
    <?php require "include/bootstrap.nav.html.php"; ?>
    <div class="container">
        <?php if(isset($error)): ?>
                <h2 class="text-center mb-4 text-danger"><?= $error ?></h2>
        <?php endif; ?>
        <h2 class="text-center mb-4 text-primary">Ajouter une nouvelle localisation.</h2>
        <form class="col-12 col-md-8 col-xl-6 m-auto needs-validation <?= isset($secure) ? 'was-validated' : ''?>" novalidate method="POST">
            <div class="form-group mb-2">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nom" pattern="^.{1,50}$" value="<?= isset($secure) ? $_POST["name"] : "" ?>" required>
                <div class="invalid-feedback">
                    Le nom ne doit pas être vide ou dépasser 50 caractères
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="type">Type</label>
                <?php
                    if(isset($secure) && ctype_digit($_POST["type"]) && ((int) $_POST["type"]) < 3)
                        $valueType = $_POST["type"];
                ?>
                <select name="type" id="type" class="form-select" required>
                    <option value="" <?= isset($valueType) ? '' : 'selected="true"' ?>>Selectionnez la catégorie</option>
                    <?php foreach(TYPES_CATEGORIES as $key => $value): ?>
                        <option value="<?= $key ?>" <?= isset($valueType) && $valueType === "$key" ? 'selected="true"' : '' ?>><?= $value ?></option>
                    <?php endforeach;  ?>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse" pattern="^.{1,100}$" value="<?= isset($secure) ? $_POST["adresse"] : "" ?>" required>
                <div class="invalid-feedback">
                L'adresse ne doit pas être vide ou dépasser 100 caractères
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="codepostal">Code Postal</label>
                <input type="text" class="form-control" name="codePostal" id="codepostal" placeholder="Code Postal" pattern="^\d\d\d\d$" value="<?= isset($secure) ? $_POST["codePostal"] : "" ?>" required>
                <div class="invalid-feedback">
                Le Code Postal doit être constitué de 4 chiffres.
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="country">Ville</label>
                <input type="text" class="form-control" name="country" id="country" placeholder="Ville" pattern="^.{1,20}$" value="<?= isset($secure) ? $_POST["country"] : "" ?>" required>
                <div class="invalid-feedback">
                La ville ne doit pas être vide ou dépasser 20 caractères
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="url">Lien du site</label>
                <input type="text" class="form-control" oninput="checkCorrectURL()" name="url" id="url" placeholder="Lien du site" pattern="^.{1,200}$" value="<?= isset($secure) ? $_POST["url"] : "" ?>" required>
                <div class="checkUrl invalid-feedback">
                Le lien du site ne doit pas être vide ou dépasser 200 caractères
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="lat">Latitude</label>
                <input type="number" class="form-control" name="latitude" id="lat" pattern="^-?\d{1,2}(\.\d{1,6})?$" max="99.999999" min="-99.999999" step="0.000001" placeholder="Exemple: 50.25647" value="<?= isset($secure) ? htmlspecialchars($_POST["latitude"]) : "" ?>" required>
                <div class="invalid-feedback">
                Format de latitude incorrect. Exemple a suivre : 5.214578
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="long">Longitude</label>
                <input type="number" class="form-control" name="longitude" id="long" pattern="^-?\d{1,2}(\.\d{1,6})?$" max="99.999999" min="-99.999999" step="0.000001" placeholder="Exemple: 1.21456" value="<?= isset($secure) ? htmlspecialchars($_POST["longitude"]) : "" ?>" required>
                <div class="invalid-feedback">
                Format de longitude incorrect. Exemple a suivre : 50.214578
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-50 d-block m-auto">Ajouter</button>
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/checkForm.js"></script>
</body>
</html>