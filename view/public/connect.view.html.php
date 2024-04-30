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
        <style>
          body{
            background-color:black;
          }
        </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="./" >Accueil</a>
    
  </div>
</nav>
  
    <div id="content">
        
        <?php if(isset($error)): ?>
            <h4 id="alert"><?=$error?></h4>
        <?php endif ?>
       
</div>   

        <?php // var_dump($_POST)?>
  <div class="row justify-content-md-center  ">

        
   <div class="card col-lg-4 col-md-5 col-sm-12 mt-5 bg-dark ">
    <div class="card-header text-white">
            Inscription
    </div>
        <div class="card-body  ">
            <form action="" method="POST" name="connexion">
                <div class="col-12 text-white">
                <label for="name" class="form-label">Nom</label>
    <input type="text" name="username" class="form-control" id="votre login" >
                </div>
                <div class="col-12 text-white">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" name="passwd" class="form-control" id="exampleInputPassword1">
                </div>
               <div class="offset-lg-10 offset-md-9 offset-sm-10 mt-2 ">
               <button type="submit" value="connexion" class="btn btn-info">Submit</button>
               </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>