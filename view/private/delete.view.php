<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            // Utilisé pour réduire la quantité d'espace occupé par les CDN
            include_once ("inc/cssBS.php");
            include_once ("../view/shared/leaf.css.php");
            ?>
        <link rel="stylesheet" href="css/colours.css">
    <title><?=$title?></title>
</head>
<body>
    <div class="container-fluid px-5 text-center"> <!-- global container -->

    <div class="container-fluid"> <!-- main container -->
    <?php
//    var_dump($_SESSION["pageCount"]);
        if ($_SESSION["pageCount"] < 2) {    
            $_SESSION["pageCount"]++;
            include ("inc/header.php");
        }else {
            include ("inc/header-static.php");
        }
    ?>
    <?php
      if(isset($errorMessage)): ?>
                <h4 class="text-danger"><?=$errorMessage?></h4>
                <?php endif ?>
                <div class="container text-center w-25">
                    <p class="h4">Êtes-vous sur vous voulez supprimer ce lieu?</p>
                    <div class="border border-warning rounded-5">
                        <p><?=$cineDelete["id"]?></p>
                        <p><?=$cineDelete["nom"]?></p>
                    </div>
                    <div class="mt-2">
                        <a href="?delete&item=<?=$cineDelete["id"]?>&confirm=ok"><span class="btn btn-danger mx-3">Oui</span></a>
                        <a href="./"><span class="btn btn-info mx-3">Non</span></a>
                    </div>
                </div>
        </div> <!-- end main container -->

        <?php
            include ("inc/footer.php");
        ?>

    </div>  <!-- end global container -->
    <?php 
            // Utiliser encore une fois pour les CDN JavaScript.
            include_once ("inc/jsBS.php");
            include_once ("../view/shared/leaf.js.php");
            ?>
      <script src="js/cine.script.js"></script>
      <script src="js/colour-script.js"></script>
    </body>
    
    </html