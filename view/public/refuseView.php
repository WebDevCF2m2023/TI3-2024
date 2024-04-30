<!--
Celui-ci est au cas où quelqu'un essaie d'accéder à une page qui nécessite que l'utilisateur soit connecté (ou encore, en cas de manipulation d'URL).
-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
    include("../view/incShared/cdnCSS.php");
?>
        <link rel="stylesheet" href="../public/css/style.css">
        <title><?=$title?></title>
    </head>
    <body>
        <div class="container mt-2 h-50">
        <?php
           include("../view/private/inc/header.php");
            ?>
            <div class="row">
                <div class="col text-center">
                    <p class="h1 mt-5">Accès Refusé</p>
                    <p class="h3">Désolé, vous ne disposez pas des autorisations nécessaires pour accéder à cette page.</h3>
                    <p class="h4">Veuillez vous <a href="?login">connecter</a> pour continuer</p>
                </div>
            </div>
        </div>
        <?php
        include("../view/incShared/footer.php");
            ?>
        <?php
        include("../view/incShared/cdnJS.php");
        ?>
<script src="js/colour-script.js"></script>
</body>
</html>