<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
     <!--Lien CSS Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Insertion d'un lieu</title>
</head>
<body>
     <!--NAVBAR-->
     <div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="./" class="nav-link text-black">Accueil</a></li>
        <li class="nav-item"><a href="?create" class="nav-link text-black">Ajouter un lieu</a></li>
        <li class="nav-item"><a href="?disconnect" class="nav-link text-black">Déconnexion</a></li>
       
      </ul>
    </header>
  </div>
  <!--Fin NAVBAR-->
  <div id="content">
        <h2 class="text-center mt-5">Ajoutez votre lieu</h2>
        <div class="container ">
            <div class="row  justify-content-center align-items-center">
                <form method="POST" name="geo" action="">
                    <div class="mb-3 mt-5">
                     
                        <input type=" text" name="nom" placeholder="Nom" class="form-control w-25  mx-auto border shadow-lg" id="nom" required>
                    </div>
                    <div class="mb-3 ">
                        
                        <input type="text" name="rue" class="form-control w-25 mx-auto shadow-lg" id="rue" placeholder="Adresse" required></input>
                    </div>
                    <div class="mb-3 ">
                        
                        <input type="number" name="codepostal" class="form-control w-25 mx-auto shadow-lg" id="codepostal" placeholder="Code Postal" required></input>
                    </div>
                    <div class="mb-3 ">
                        
                        <input type="number" name="telephone" class="form-control w-25 mx-auto shadow-lg" id="telephone" placeholder="Numéro téléphone" required></input>
                    </div>
                    <div class="mb-3 ">
                        
                        <input type="text" name="url" class="form-control w-25 mx-auto shadow-lg" id="url" placeholder="URL vers le site" required></input>
                    </div>
                    <div class="mb-3">
                       
                        <input type="number" placeholder="latitude" name="latitude" step="0.000000001" class="form-control w-25 mx-auto shadow-lg" id="latitude" required>
                    </div>
                    <div class="mb-3">
                        
                        <input type="number" name="longitude" placeholder="longitude" step="0.000000001" class="form-control w-25 mx-auto shadow-lg" id="longitude" required>
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" value="Insérer" class="btn btn-outline-primary">
                    </div>
                    <?php
                    //var_dump($_POST);
                    ?>
                </form>
            </div>
        </div>
    </div>
     <!--Lien JS Bootstrap-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>