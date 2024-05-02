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
            <h4 class="text-danger" id="alert"><?=$error?></h4>
        <?php endif ?>
       
</div>   

        <?php // var_dump($_POST)?>
<div class="container " style="margin-top:10%;">
  <div class="row justify-content-md-center justify-content-sm-center">
  <div class="col-lg-6  pt-5 rounded ">        
                    <div id="carouselExampleControls" class="carousel slide shadow-lg" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/car4.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/car3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/car2.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        
   <div class="card col-lg-4 col-md-8 col-sm-10 mt-5 bg-dark offset-lg-2 ">
    <div class="card-header text-white">
            Administration
    </div>
        <div class="card-body">
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>