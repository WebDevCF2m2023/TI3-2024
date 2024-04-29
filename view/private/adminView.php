<?php

// Si vous n'êtes pas de niveau administrateur, il est impossible d'accéder à cette page (la même chose pour toutes les pages qui ne sont pas destinées à être consultées par le public).
if (!isset($_SESSION["monID"]) || $_SESSION["monID"] !== session_id()) {
    header("Location: ?page=home");
    exit();
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php       // Un moyen pratique de cacher la pollution visuelle que représentent les CDN
    include("../view/incShared/cdnBS.php");
 //   include("../view/incShared/cdnBS.php");
?>
    <link rel="stylesheet" href="css/style.css">
    <title><?=$title?></title>
</head>
    <body>
        <div class="container-fluid px-5" id="timeToGo"> <!-- global container -->
        
        <?php

    ?>
    <div class="container h-25"> <!-- main container -->
        <p class="h2 text-center">Bonjour, <?=$_SESSION["username"]?>. Ici vous pouvez modifier ou changer des entrées</p>
    
    
    <?php
       
       ?>
    <?php
        if (isset($_GET["action"]) && $_GET["action"] === "delete") {
            include("inc/delete-table.php");
        }else if (isset($_GET["action"]) && $_GET["action"] === "update") {
            include("inc/update-form.php");
        }else {
            include("inc/admin-table.php");
        }
        ?>

    </div> <!-- end main container -->

<?php
        include("inc/footer-static.php");
        ?>
    
</div>  <!-- end global container -->

<?php
 //       include("../view/incShared/footer.php");
    ?>
    </div>
<?php       // Un moyen pratique de cacher la pollution visuelle que représentent les CDN
    include("../view/incShared/cdnJS.php");
    ?>
        <script src="js/colour-script.js"></script>


</body>
</html>