


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php       // Un moyen pratique de cacher la pollution visuelle que représentent les CDN
    include("../view/incShared/cdnLeaf-css.php");
 //   include("../view/incShared/cdnBS.php");
?>
    <link rel="stylesheet" href="css/style.css">
    <title><?=$title?></title>
</head>
<body>
    <div class="global">
    <header>
    <h1>Carte Interactive</h1>
    <h2>Parcours Ciné à Bruxelles</h2>
    <?php

    ?>
    <p>Cliquez <a href="?page=homeBS&login">ici</a> pour vous connecter</p>
    </header>
    <div class = "mainMap">
        <div id = "theMap" class = "mapDiv">
            <!-- Only map here -->
        </div>
        <div class = "listDiv">
            <div class="listHead">
                <h3>Liste des locations</h3>
                <h5>Cliquez sur un nom du Cinéma ci-dessous pour la situer sur la carte</h5>
            </div>
            <table class = "listTable">
                <tr>
                    <th>Nom</th>
                </tr>
                <?php
                $i=0;
                    foreach ($getMaps as $map) {

                ?>
                    <tr>
                        <td><a href="?page=home&lat=<?=$map["latitude"]?>&lon=<?=$map["longitude"]?>&nom=<?=$map["nom"]?>&id=<?=$map["id"]?>&url=<?=$map["url"]?>" class="mapLink"><?=$map["nom"]?></a></a></td>
                    </tr>

                <?php
                }            
                ?>
            </table>
        </div>


    </div>

    <div class = "listDivLarge">
            <div class="listHeadLarge">
                <h3>Liste des locations</h3>
                <h5>Cliquez sur un nom du Cinéma ci-dessous pour la situer sur la carte</h5>
            </div>
            <table class="normalTable">
                <tr>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Adresse</th>
                    <th>Code Postale</th>
                    <th>Ville</th>
                    <th>Latitude</th>
                    <th>Logitude</th>
                    <th>URL</th>
                </tr>
                <?php
                    foreach ($getMaps as $map) {
                ?>
                    <tr>
                        <td><a href="?page=home&lat=<?=$map["latitude"]?>&lon=<?=$map["longitude"]?>&nom=<?=$map["nom"]?>&id=<?=$map["id"]?>" class="mapLinks"><?=$map["nom"]?></a></a></td>
                        <td><?=$map["type"]?></td>
                        <td><?=$map["adresse"]?></td>
                        <td><?=$map["codepostal"]?></td>
                        <td><?=$map["ville"]?></td>
                        <td><?=$map["latitude"]?></td>
                        <td><?=$map["longitude"]?></td>
                        <td><a href="<?=$map["url"]?>" target="_blank">Visite</td>
                    </tr>
                <?php
                }            
                ?>
            </table>
        </div>





    <?php
 //       include("../view/incShared/footer.php");
    ?>
    </div>
<?php       // Un moyen pratique de cacher la pollution visuelle que représentent les CDN
    include("../view/incShared/cdnLeaf-js.php");
    ?>
        <script src="js/colour-script.js"></script>
        <script src="js/map-script.js"></script>

    </body>
    </html>