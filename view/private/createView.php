<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
                    include("../view/incShared/cdnCSS.php");
                ?>
    <link rel="stylesheet" href="css/style.css">
    <title><?=$title?></title>
</head>
<body>
    
<?php
    $_SESSION['pageCount']++;
    if ($_SESSION["pageCount"] < 3) {
        include("inc/header.php");
    }else {
        include("inc/header-static.php");
    }

    if (!isset($_SESSION["monID"]) || $_SESSION["monID"] != session_id()) {
        header ("Location: ?page=refuse");
        exit();
    }
    ?>
    
    <div class="container">
        <?php
        if(isset($errorMessage)): ?>
                <h4 class="text-danger"><?=$errorMessage?></h4>
        <?php endif ?>
    <p class="h2 text-center">Ajouter un Lieu</p>
    
    <?php
        include("inc/insert-form.php");
    ?>


    </div>


    
  
    <?php
        include("../view/incShared/footer.php");
        ?>
<?php
        include("../view/incShared/cdnJS.php");
        ?>
    <script src="js/insertScript.js"></script>
    <script src="js/colour-script.js"></script>
</body>
</html>








