<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/carteJSON.css">
    <title>Connexion</title>
</head>
<body>


<h1></h1>
<form action="" method="POST" name="connexion">


<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="--bs-danger-bg-subtle text-body" style="border-radius: 1rem;">
          <div class="--bs-body-color p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Connexion</h2>
              <p class="text-body-50 mb-5">Entée votre Nom et votre Mots de passe!</p>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="text" name="username" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Nom</label>
              </div>

              <div data-mdb-input-init class="--bs-body-color form-outline form-white mb-4">
                <input type="password" name="passwd" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Mot de passe</label>
              </div>

              

              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit" value="connexion">Connexion</button>

              

            </div>
</form>
           

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <!--  <div class="page">
  
<div class="login"> 
<div class="formulaire">
  <h1>Connexion</h1>
  <form action="" method="POST" name="connexion">
        <input type="text" name="username" class="input" onclick="this.value='';" value="Nom"><br>
        <input type="password" name="passwd" class="input2" onclick="this.value='';" value="Password><br>
        <input type="submit" value="connexion">


        


    </form>   
  <div class="bouton">Connexion</div>
  </div>
 
</div>

<!--<div class="page">
  
<div class="login"> 
<div class="formulaire">
  <h1>LOGIN PAGE</h1>
<form>
<input type="text" name="firstname" class="input" onclick="this.value='';" value="Nickname"><br>
 <input type="text" name="firstname" class="input2" onclick="this.value='';" value="Password"><br>
</form>   
  <div class="bouton">LOGIN</div>
  </div>
  <div class="forgot">forgot password ?</div>
</div>
</div>




  <!--  <nav>
        <ul>
            <li><a href="./">Accueil</a></li>
            <li><a href="?connect">Connexion</a>
        </ul>
    </nav>
    <form action="" method="POST" name="connexion">
        <input type="text" name="username" placeholder="Votre login" required><br>
        <input type="password" name="passwd" placeholder="Votre mot de passe" required><br>
        <input type="submit" value="connexion">
    </form> -->
    <?php
    // var_dump($_POST);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>