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
               
            <?php
                // Afin de garder les pages plus propres, j'utilise des inclusions pour les éléments plus volumineux (comme les tableaux, les formulaires, etc.)
                // Ou pour les éléments qui sont répétés sur plusieurs pages (en-tête, pied de page, barre de navigation, etc.)
                include ("inc/update-form.php");
            ?>

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
      <script src="js/update.script.js"></script>
      <script src="js/colour.script.js"></script>
    </body>
    
    </html