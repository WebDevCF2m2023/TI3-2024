<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update d'un article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <h1 class="text-center text-white">Update d'un article</h1>
    <nav>
        
            <a href="./" class="btn btn-info col-4 offset-4 mt-3">Accueil de l'administration</a>
           
        
    </nav>
    <div id="content">
        <h3 class="text-center text-white">Article à modifier</h3>
        <?php
        if(isset($errorUpdate)):
        ?>
    <h3 class="text-info" id="alert"><?=$errorUpdate?></h3>
        <?php
        endif;
        // datas est une chaîne de caractère : erreur SQL !
        if(is_string($getOneGeoloc)):
        ?>
            <h3 id="alert"><?=$getOneGeoloc?></h3>
        <?php
        // Pas de `geoloc` trouvée
        elseif($getOneGeoloc===false):
        ?>
            <h3 id="comment" >Vous n'avez pas modifié le lieu !</h3>
        <?php
        // Nous avons un lieu
        else:
        ?>
    
          
    </div>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Rue</th>
      <th scope="col">Ville</th>
      <th scope="col">Code postal</th>
      <th scope="col">Latitude</th>
      <th scope="col">Longitude</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <th scope="row">1</th>
      <form method="POST" name="localisation" action="">
      <td><input type="text" name="rue" value="<?=$getOneGeoloc['rue']?>" required></td>
      <td><textarea name="ville"><?=$getOneGeoloc['ville']?></textarea></td>
      <td><input type="text" name="codepostal" value="<?=$getOneGeoloc['codepostal']?>" required></td>
      <td> <input type="number" name="latitude" step="0.000000001" value="<?=$getOneGeoloc['latitude']?>" required></td>
      <td>  <input type="number" name="longitude" step="0.000000001" value="<?=$getOneGeoloc['longitude']?>" required>
                <input type="submit" value="Update"></td>
    </tr>
    </form>
    <?php endif ?>
    
  </tbody>
</table>
</body>
</html>