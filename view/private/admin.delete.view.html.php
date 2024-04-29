<?php
include "../view/inc/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression d'un lieu</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
</head>
<body>
    <h1>DeleteData</h1>
    <?php 
    include "../view/inc/navAdmin.php";
    ?>
    <div id="content">
        <h3>Article à supprimer</h3>
    
        <?php
        if(isset($error)):
            ?>
            <h3 id="alert"><?=$error?></h3>
        <?php
        endif;
        
        if(is_string($getOneData)):
        ?>
            <h3 id="alert"><?=$getOneData?></h3>
        <?php
        // Pas de `geoloc` trouvée
        elseif($getOneData===false):
        ?>
            <h3 id="comment">Ce le lieu n'existe plus !</h3>
        <?php
        // Nous avons un lieu
        else:
        ?>
        <h4>Titre : <?=$getOneData['nom']?></h4>
        <p><?=$getOneData['adresse']?></p>
        <h4>Voulez-vous vraiment supprimer cet article</h4>
        <a href="?delete=<?=$idDelete?>&ok"><button value="supprimer">supprimer</button></a> | <a href="./"><button value="Non">Ne pas supprimer</button></a>
                
        <?php endif ?>   
    </div>
<?php 
    include "../view/inc/footer.php";
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>
</body>
</html>