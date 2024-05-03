<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<section class="vh-100" style="background-color: #9A616D;">

<div>
    <h4 id="accueil"><a href="./">Accueil</a></h4>
    <h4 id="api"><a href="?json" target="_blank">API format JSON</a></h4>
</div>

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-12">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="img/sticker214.png"/>
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <div id="content">

                <?php if(isset($error)): ?>
                    <h4 id="alert"><?=$error?></h4>
                <?php endif ?>

                <form action="" method="POST" name="connexion">

                    <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                        <span class="h1 fw-bold mb-">Connexion à notre administration</span>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" name="username" placeholder="Login" id="form2Example17" class="form-control form-control-lg" required />
                        
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" name="userpwd" placeholder="Password" id="form2Example27" class="form-control form-control-lg" required/>
                    </div>

                    <div class="pt-1 mb-4">
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit" value="connexion">Connexion</button>
                    </div>
                    </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>

</footer>
    
</body>
</html>