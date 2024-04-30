<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./" >Accueil</a>
    
  </div>
</nav>
  
    <div id="content">
        <h3>Connexion à notre administration</h3>
        <?php if(isset($error)): ?>
            <h4 id="alert"><?=$error?></h4>
        <?php endif ?>
    <form action="" method="POST" name="connexion">
  <div class="mb-3">
    <label for="name" class="form-label">Nom</label>
    <input type="text" name="username" class="form-control" id="votre login" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" name="passwd" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" value="connexion" class="btn btn-primary">Submit</button>
</form>
       
       
        <?php // var_dump($_POST)?>
    </div>
</body>
</html>