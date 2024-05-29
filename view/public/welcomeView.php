<?php
    $_SESSION["showGreeting"] = false;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    include("../view/incShared/cdnBS.php");
?>
    <link rel="stylesheet" href="css/style.css">
    <title><?=$title?></title>
</head>
<body>

<div class="container text-center mt-5 pt-5">
  <p class="h3 mt-5">Voilà, mon 3ème Travail d'Intégration</p>
  <p class="h4">Quelques notes sur ce TI : -</p>
    <ul class="list-group list-group-flush animate__animated animate__fadeIn animate__delay-1s">
      <li class="list-group-item bg-transparent border-bottom border-success">Sur les pages Administration, tout le style &lpar;à l'exception de la couleur de fond&rpar; est entièrement géré avec Bootstrap.</li>
      <li class="list-group-item bg-transparent border-bottom border-success">Javascript est utilisé pour valider les entrées (et afficher une erreur, si nécessaire). Une fois validées par JS, les entrées sont gérées par PHP &lpar;qui affichera toutes les erreurs depuis le backend&rpar;.</li>
      <li class="list-group-item bg-transparent border-bottom border-success">C'est la première fois que j'expérimente avec l'animation. Un grand pas par rapport à mon aspect habituel terne et statique</li>
      <li class="list-group-item bg-transparent border-bottom border-success">Comme il n'y avait pas d'exigence particulière de la part d'André, et que c'est sa dernière TI, j'ai ajouté l'option de changement de couleur &lpar;stockage de session, ahoy&rpar;.</li>
    <!-- <li class="list-group-item bg-transparent border-bottom border-success">And a fifth one</li> -->
    </ul>
        <p class="h5 mt-2">Cliquez <a href="?page=home">ici</a> pour continuer</p>
        <p class="h6">&lpar;Cette page ne s'affichera qu'une seule fois&rpar;</p>
</div>
    <?php
        include("../view/incShared/footer.php");
    ?>
    <?php
    include("../view/incShared/cdnJS.php");
    ?>
        <script src="js/colour-script.js"></script>
        <script src="scripts/checkbox-script.js"></script>
    </body>
    </html>