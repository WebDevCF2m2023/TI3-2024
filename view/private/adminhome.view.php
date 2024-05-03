<?php

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <?php 
            // Utilisé pour réduire la quantité d'espace occupé par les CDN
            include_once ("../view/shared/leaf.css.php");
            ?> 
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/colours.css">
        <title><?=$title?></title>
    </head>
    <body>
        <div class="global">
            <?php
                include "inc/header.public.php";
                ?>
  
        <main>
            <div class="normalHead">
                <h2>Carte Interactive</h2>
                <h3>Parcours Ciné à Bruxelles</h3>   
                <a href="?logout">Déconnexion</a>
            </div>
            <div class="hideLogin">
                <form action="" method="POST" id = "loginForm">
                    <label for="nomInp">Nom</label>
                        <input type="text" name="userNameInp" id="nomInp" aria-describedby="userNameField" placeholder="Votre Nom">
                    <label for="pwdInp">Password</label>
                        <input type="password" name="userPassInp" id="pwdInp" placeholder="Password">
                    <button type="submit" id="submitLogin">Submit</button>
                </form>
            </div>
                <div class="mapAndList">
                    <div id="map" class="theMap">
                        <!-- La carte, et rien que la carte, va ici -->
                    </div>
                    <div class="cineList">
                        <?php
                            if ($cineCount === 1) {
                        ?>
                        <h4>Il n'y a pas beaucoup de choix, je crains. Il n'y a qu'un seul cinéma!</h4>
                         <?php   
                            }else{
                        ?>
                        <h4>Choisis parmi ces <?=$cineCount?> cinémas.</h4>
                        <?php
                            }
                        ?>
                            <div id="cineJSON">
                                <!-- Tout est créé dans le fichier js.script -->
                            </div>

                    </div>  <!-- end cineList -->
                </div>    <!-- end mapAndList -->
        </main>
    <?php if(isset($errorMessage)) echo $errorMessage;    //  IF d'une ligne, courte et efficace ?>
        </div> <!-- end global -->
    
    
        <?php 
            // Utiliser encore une fois pour les CDN JavaScript.
            include_once ("../view/shared/leaf.js.php");
            ?> 
        <script src="js/cine.script.js"></script>
        <script src="js/login.script.js"></script>
</body>
</html>