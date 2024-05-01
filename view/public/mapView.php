<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
                    include("../view/incShared/cdnCSS.php");
                    include("../view/incShared/cdnLeaf-css.php");
                    ?>
        <link rel="stylesheet" href="css/style.css">
        <title><?=$title?></title>
    </head>
    <body>
        <div class="container-fluid px-5 mt-2 h-auto">
            <?php
           include("../view/private/inc/header.php");
           ?>
        <div class="container text-center">
            <p class="h2">La Carte</p>
            <?php
                if (!isset($_SESSION["monID"]) || $_SESSION["monID"] != session_id()) { ?>
                    <p class="h3">Pour accéder à toutes les fonctionnalités de la carte, veuillez vous <a href="?login">connecter</a></p>
                    <?php    }else { ?>
                        <p class="h3">Bonjour, <?=$_SESSION["username"]?>, où voudrais-tu aller?</p>
                        <?php
                             }   
                             ?>
            <div class="hidden" style="display: none"><?=var_dump($result);?></div>
        </div>
        <div class="row d-flex">
            
            <div class="col-9 ps-5">
                <div id="map" class="mapDiv"></div>
            </div>
            <div class="col-3">
                
                <div class="container">                    
                    List HERE
                    
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <?php
                include("inc/table.php");
                ?>
        </div>
    </div>
</div>
</div>
<?php
        include("../view/incShared/footer.php");
        ?>
<?php
        include("../view/incShared/cdnJS.php");
        include("../view/incShared/cdnLeaf-js.php");
        ?>
<!--  Script Perso  -->
<script src="js/colour-script.js"></script>
<script src="js/map-script.js"></script>
</body>
</html>