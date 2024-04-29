<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php       // Un moyen pratique de cacher la pollution visuelle que représentent les CDN
    include("../view/incShared/cdnBS.php");
 //   include("../view/incShared/cdnBS.php");
?>    <link rel="stylesheet" href="css/style.css">
    
    <title><?=$title?></title>
</head>
<body>
    
<?php
    $_SESSION['pageCount']++;
    if ($_SESSION["pageCount"] < 2) {
        include("incAdmin/header.php");
    }else {
        include("incAdmin/header-static.php");
    }

    if (!isset($_SESSION["monID"]) || $_SESSION["monID"] != session_id()) {
        header ("Location: ?page=refuse");
        exit();
    }
    ?>
    
    <div class="container">

    <p class="h2 text-center">Ajouter un Lieu</p>
    
    <?php
        include("incAdmin/insert-form.php");
    ?>


    </div>

    <?php

        include("../view/incShared/footer.php");
    ?>
    
    <?php       // Un moyen pratique de cacher la pollution visuelle que représentent les CDN
    include("../view/incShared/cdnJS.php");
    ?>

    <script src="js/insertScript.js"></script>
    <script src="js/colour-script.js"></script>
</body>
</html>








