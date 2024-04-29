


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php       // Un moyen pratique de cacher la pollution visuelle que représentent les CDN
    include("../view/incShared/cdnLeaf-css.php");
    include("../view/incShared/cdnBS.php");
?>
    <link rel="stylesheet" href="css/style.css">
    <title><?=$title?></title>
</head>
<body>

<div class="row w-auto">
              <div class="col">
            <form class="d-flex flex-column align-items-center justify-content-center" method="POST" action="">
                 <div class="form-group">
                   <label for="nomInp">Nom</label>
                   <input type="text" class="form-control text-center" name="userNameInp" id="nomInp" aria-describedby="userNameField" placeholder="Votre Nom">
                 </div>
                 <div class="form-group">
                   <label for="pwdInp">Password</label>
                   <input type="password" class="form-control text-center" name="userPassInp" id="pwdInp" placeholder="Password">
                 </div>
                 <button type="submit" class="btn btn-dark rounded-pill mt-3" id="sayBye">Submit</button> 
                </form>
                <?php
                    if(isset($errorMessage)) echo $errorMessage;
                ?>
                </div>
            </div>

            <?php
       include("../view/incShared/footer.php");
    ?>
    </div>
<?php       // Un moyen pratique de cacher la pollution visuelle que représentent les CDN
    include("../view/incShared/cdnLeaf-js.php");
    ?>
        <script src="js/colour-script.js"></script>
        <script src="js/map-script.js"></script>

    </body>
    </html>