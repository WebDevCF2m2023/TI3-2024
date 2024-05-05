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
        if ($_SESSION["pageCount"] < 2) {
            include("inc/welcome-message.php");
        }else {
            $cineCount = count($cinemas);
            include("inc/admin-table.php");
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
      
      <script src="js/colour.script.js"></script>
    </body>
    
    </html