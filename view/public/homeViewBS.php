<!-- 

Si je n'avais pas séparé les sections en "include", cette page ferait 800 lignes de code (HTML, PHP et Bootstrap) et non 50.

-->

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
    <div class="container-fluid px-5 text-center" id="timeToGo"> <!-- global container -->

    <?php
    $_SESSION['pageCount']++;
    if ($_SESSION["pageCount"] < 3) {
        include("../view/private/inc/header.php");
    }else {
        include("../view/private/inc/header-static.php");
    }
    ?>
    <div class="container h-25"> <!-- main container -->

    <?php
      if(isset($errorMessage)): ?>
                <h4 class="text-danger"><?=$errorMessage?></h4>
            <?php endif ?>
            <?php
    if (isset($_GET["login"])){

     include("inc/login-form.php"); 
    }   else if (isset($errorMessage)) {
        ?>
            <p><?=$errorMessage?></p>
        <?php
    }else if (!isset($_SESSION["monID"]) || $_SESSION["monID"] != session_id()) {
        ?>
        <div class="text-center">
        <h3>Cliquez <a href="?login">ICI</a> pour vous connecter</h3>
        </div>
        <?php
    }

    ?>
    <?php
        if (!isset($_SESSION["monID"]) || $_SESSION["monID"] !== session_id()) {
            include("inc/welcome-message.php");
        }
        ?>

    
    
        </div> <!-- end main container -->
    
            <?php
            include("../view/incShared/footer.php");
            ?>
    
    
    </div>  <!-- end global container -->
    
    <!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts -->
    <?php
        include("../view/incShared/cdnJS.php");
        ?>
        <script src="js/colour-script.js"></script>
        <script src="js/checkbox-script.js"></script>
    </body>
    </html
