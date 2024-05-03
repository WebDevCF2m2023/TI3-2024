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

    <div class="container"> <!-- main container -->
    <?php
        include ("inc/header.php");
    ?>
    <?php
      if(isset($errorMessage)): ?>
                <h4 class="text-danger"><?=$errorMessage?></h4>
                <?php endif ?>
    <?php
        if ($_SESSION["pageCount"] === 0) {
            $_SESSION["pageCount"]++;
            include("inc/welcome-message.php");
        }else {
            ?>
        <?php

// PUT STUFF HERE   // PUT STUFF HERE   // PUT STUFF HERE   // PUT STUFF HERE   // PUT STUFF HERE   // PUT STUFF HERE   // PUT STUFF HERE   // PUT STUFF HERE   // PUT STUFF HERE   // PUT STUFF HERE   // PUT STUFF HERE   

        }
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
      <script src="js/cine.script.js"></script>
      <script src="js/colour-script.js"></script>
    </body>
    
    </html