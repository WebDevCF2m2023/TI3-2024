<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
    <nav>
        
    </nav>
    
    <?php
    // var_dump($_POST);
    ?>
</body>
<form class="row g-3 needs-validation" novalidate>
<h1>Connexion</h1>
  <div class="col-md-4">
  <form action="" method="POST" name="connexion">
        <input type="text" name="username" placeholder="Votre login" required><br>
        <input type="password" name="passwd" placeholder="Votre mot de passe" required><br>
        <input type="submit" value="connexion">
    </form>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Connexion</button>
  </div>
</form>
</html>