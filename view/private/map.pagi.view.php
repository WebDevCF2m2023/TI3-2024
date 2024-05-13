<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
                    include("inc/cssBS.php");
                    include("../view/shared/leaf.css.php");
                    ?>
        <link rel="stylesheet" href="css/styleAdmin.css">
        <link rel="stylesheet" href="css/colours.css">
        <title><?=$title?></title>
    </head>
    <body>
        <div class="container-fluid px-5 mt-2 h-auto">
        <?php

        if ($_SESSION["pageCount"] < 4) {    
            $_SESSION["pageCount"]++;
            include ("inc/header.php");
        }else {
            include ("inc/header-static.php");
        }
    ?>
        <div class="container text-center">
            <p class="h2">La Carte</p>

           
        </div>
        <div class="row d-flex">
            
            <div class="col-9 ps-5">
                <div id="map" class="mapDiv"></div>
            </div>
            <div class="col-3">
                
                    <div class="container text-center"> 
                    <p class="h4">Cliquez sur un nom pour le voir sur la carte</p>                   
                    <div class="d-flex flex-row">
            <div class="col">
                <ul class="list-group">
                    <?php 
                        foreach ($flicks as $flick) {
                    ?>
                        <li class="list-group-item" 
                            id="<?=$flick["id"]?>" 
                            lat = "<?=$flick["lat"]?>" 
                            lon = "<?=$flick["lon"]?>">
                            <?=$flick["nom"]?> | 
                            <?=$flick["add"]?> | 
                            <?=$flick["code"]?> | 
                            <?=$flick["ville"]?> | 
                             <a href="<?=$flick["url"]?>" 
                                target="_blank">
                                 <img src="img/link.svg" alt="link to cinema">
                             </a>
                        </li>
                    <?php
                    }
                    ?>
                    </ul>
                    <form method="POST" id="pgAmount">
                    <select name="pageAmount" class="d-flex align-self-start" onchange='document.getElementById("pgAmount").submit()'>
                        <option label="Montant">
                        <option value="2">2</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="255">Tout</option>
                    </optgroup>    
                    </select>
                    </form>
                    <?php
                    if (isset($pagination)) echo "<p>$pagination</p>"; 
                    ?>
            </div>                
                    </div>
                </div>
            </div>
</div>

<?php
        include("inc/footer.php");
        ?>
        <form action="" method="POST">
        <button class="btn" name="deleteAll" style="opacity: 0;" >Parce qu'il demandera</button>
    </form>
<?php
        include("inc/jsBS.php");
        include("../view/shared/leaf.js.php");
        ?>
<!--  Script Perso  -->
<script src="js/colour.script.js"></script>
<script src="js/map.pagi.script.js"></script>
</body>
</html> 