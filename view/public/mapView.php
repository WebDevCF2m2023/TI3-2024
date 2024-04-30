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
                        <?php    }
                require_once("mapJSON.php");
                
                ?>
            <div class="hidden" style="display: none"><?=var_dump($result);?></div>
        </div>
        <div class="row d-flex">
            
            <div class="col-9 ps-5">
                <div id="theMap"></div>
            </div>
            <div class="col-3">
                
                    <div class="container">
               
                    
                        <?php 
                         if (isset($_SESSION["monID"]) && $_SESSION["monID"] === session_id()) {
                            ?>
                    <div class="table-responsive">
                        <table class="table" data-toggle="table" data-show-columns="false" data-search="false" data-pagination="true">
                        <thead>
                                <tr>
                                    <th class="text-center bg-transparent">Choissisez votre destination</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($getMaps as $map) {
                                        ?>
                                    <tr>
                                        <td><a href="?page=showmap&lat=<?=$map["latitude"]?>&lon=<?=$map["longitude"]?>&nom=<?=$map["nom"]?>&id=<?=$map["id"]?>&url=<?=$map["url"]?>" class="mapLink link-opacity-75 link-opacity-100-hover text-decoration-none fs-5"><?=$map["nom"]?></a></td>
                                    <?php
                                    }
                                }
                                    ?>
                                    </tr>
                            </tbody>
                        </table>
                   
                    </div>
               
</div>
</div>
</div>
<div class="container">
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