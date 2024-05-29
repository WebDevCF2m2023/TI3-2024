


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

<?php
    if (isset($_SESSION["monID"]) && $_SESSION["monID"] === session_id())
    {
        header("Location: ?page=adminHome");
    }
?>
    <div class="global">
    <header>
    <h1>Carte Interactive</h1>
    <h2>Parcours Ciné à Bruxelles</h2>
    <?php

    ?>
    <p>Cliquez <a href="?page=homeBS&login">ici</a> pour vous connecter</p>
    </header>
    <div class = "mainMap">
        <div id = "map" class = "mapDiv">
            <!-- Only map here -->
        </div>

        <div id="liste" class="listDiv">
            <h3>Liste des Cinémas</h3>
        </div>
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
