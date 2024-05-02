<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression d'un lieu</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once "../view/inc/navbar.admin.php";
    ?>
    <div id="content">
    
        <?php if(isset($error)): ?>

            <h3 id="alert"><?=$error?></h3>
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
            <h3 id="comment">Ce le lieu n'existe plus !</h3>
        <?php
        // Nous avons un lieu
        else:
        ?>    
        <div class="container mt-4 w-75">
            <div class="card text-center">
                <div class="card-header"><?=$getOneAdresse['ville']?></div>
                    <div class="card-body">
                        <h5 class="card-title"><?=$getOneAdresse['nom']?></h5>
                        <p class="card-text"><?=$getOneAdresse['adresse']?></p>
                        <p class="card-text"><?=$getOneAdresse['codepostal']?></p>
                        <p class="card-text"><?=$getOneAdresse['latitude']?></p>
                        <p class="card-text"><?=$getOneAdresse['longitude']?></p>
                    </div>
                <div class="card-body">
                    <a href="?delete=<?=$idDelete?>&ok"><button value="supprimer" class="btn btn-outline-success btn-rounded me-2 mb-2">supprimer</button></a>
                    <a href="./"><button value="Non" class="btn btn-outline-danger btn-rounded mb-2">Ne pas supprimer</button></a>
                </div>
            </div>
        </div>   
        <?php endif ?>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>