<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
    <title>Connexion</title>
</head>
<body>
    
<header>
        <div class="container">
        <div class="row mb-5">
<?php 
    include "../view/inc/navPublic.php";
?>
        </div>
        </div>
</header>



<div class="container">
        <div class="row">
            <div class="col p-5">
        <h1 class="text-center">  <span class="text-primary">A</span><span class="text-danger">d</span><span class="text-warning">m</span><span class="text-primary">i</span><span class="text-success">n</span>Connect.</h1>
        <?php if(isset($error)): ?>
            <h4 class="text-center text-danger"id="alert"><?=$error?></h4>
        <?php endif ?> 
        </div>
        </div>
</div>   


<div class="connectform">
<div class="container-md-3">
        <div class="row formulaire mt-5">
                <div class="col m-5">
            <form class="d-flex flex-column align-items-center justify-content-center" method="POST" action="">
                 <div class="form-group">
            <input type="text" class="form-control text-center bg-light" name="username" placeholder="Your login" required><br>
            <input type="password" class="form-control text-center text-alert bg-light" name="passwd" placeholder="Your password" required><br>
                </div>
                <div class="form-group">
            <input type="submit" class="form-control text-center text-white bg-success" value="connexion">
                </div>
            </form>
                </div>
        </div>
</div>
</div>


<footer class="bg-dark text-center text-white">
  <div class="container p-3 pb-0">
    <section class="">
      <form action="">
        <div class="row d-flex justify-content-center">
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>

         
          <div class="col-md-5 col-12">
            <div class="form-outline form-white">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2"></label>
            </div>
          </div>

          <div class="col-auto">
            <button type="submit" class="btn btn-outline-light">
              Subscribe
            </button>
          </div> 
        </div>
      </form>
    </section>
   </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024
    <a class="text-white" href="https://2023.webdev-cf2m.be/Guillaume/"><span class="text-primary">G</span><span class="text-danger">u</span><span class="text-warning">i</span><span class="text-primary">g</span><span class="text-success">l</span><span class="text-danger">e</span></a>
  </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>