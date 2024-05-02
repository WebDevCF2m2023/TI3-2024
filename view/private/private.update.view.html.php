<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update d'un article</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require_once "../view/inc/navbar.admin.php";
    ?>
    <div id="content">
        <?php
        if(isset($errorUpdate)):
        ?>
            <h3 id="alert"><?=$errorUpdate?></h3>
        <?php
        endif;
        // datas est une chaîne de caractère : erreur SQL !
        if(is_string($getOneAdresse)):
        ?>
            <h3 id="alert"><?=$getOneAdresse?></h3>
        <?php
        // Pas de `localisations` trouvée
        elseif($getOneAdresse===false):
        ?>
            <h3 id="comment">Vous n'avez pas modifié le lieu !</h3>
        <?php
        else:
        ?>

    <form method="POST" >
            <div class="container border-end border-bottom border-primary rounded-5 p-4">
            <div class="row mb-4">
                <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="form3Example1">Nom</label>
                    <input type="text" id="form3Example1" class="form-control" name="nom" value="<?=$getOneAdresse['nom']?>"/>
                </div>
                </div>
                <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="form3Example2">Adresse</label>
                    <input type="text" name="adresse" id="form3Example2" class="form-control" value="<?=$getOneAdresse['adresse']?>" />
                </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="form3Example1">Code Postal</label>
                    <input type="number" id="form3Example1" class="form-control" name="codepostal" value="<?=$getOneAdresse['codepostal']?>"/>
                </div>
                </div>
                <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="form3Example2">Ville</label>
                    <input type="text" name="ville" id="form3Example2" class="form-control" value="<?=$getOneAdresse['ville']?>" />
                </div>
                </div>
                <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="form3Example2">Nombre de vélos</label>
                    <input type="number" name="nb_velos" id="form3Example2" class="form-control" value="<?=$getOneAdresse['nb_velos']?>" />
                </div>
                </div>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Latitude</label>
                <input type="number" step="0.000000001"  name="latitude" id="form3Example3" class="form-control" value="<?=$getOneAdresse['latitude']?>"/>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Longitude</label>
                <input type="number" step="0.000000001"  name="longitude" id="form3Example4" class="form-control" value="<?=$getOneAdresse['longitude']?>" />
            </div>
            <div class="text-center">
                <button data-mdb-ripple-init type="submit" class="btn btn-outline-primary btn-rounded mb-4">Update</button>
            </div>
        </div>
    </form>
    <?php endif ?>   
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>