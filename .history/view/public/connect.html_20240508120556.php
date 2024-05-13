<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/css/form.css">
    <title>Connexion</title>
</head>
<body>
    
    <title>Connexion</title>
  </head>
  <form action="" method="POST" name="connexion">
  <h1>Connexion</h1>
  <div class="form-control">
          <label>login</label>
          <input type="text" id="nom" placeholder="Entrez votre login" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <div class="form-control">
          <label>Password</label>
          <input type="password"id="password" placeholder="Enter your password"/>
        <input type="submit" value="connexion">
       
    </form>
    <button><a href="./">Accueil</a></button>
    <?php
    // var_dump($_POST);
    ?>
  
    <!-- script / js -->
    <script src="./script.js"></script>
  </body>
</html>
