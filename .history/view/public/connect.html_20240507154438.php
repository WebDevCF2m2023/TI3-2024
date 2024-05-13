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
        <input type="text" name="username" placeholder="Votre login" required><br>
        <input type="password" name="passwd" placeholder="Votre mot de passe" required><br>
        <input type="submit" value="connexion">
    </form>
    <?php
    // var_dump($_POST);
    ?>
  <body>
    <div class="container">
      <div class="header">
      <h1>Connexion</h1>
      </div>
      <form class="form" id="form">
        <div class="form-control">
          <label>nom</label>
          <input type="text" id="nom" placeholder="Entrez votre nom" />
          <i class="fas fa-check-circle"><a href="./">Accueil</a></i>
          <i class="fas fa-exclamation-circle"></i>
          <small> Error message </small>
        </div>
        <div class="form-control">
          <label>Password</label>
          <input
            type="password"
            id="password"
            placeholder="Enter your password"
          />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small> Error message </small>
        </div>

        <div class="form-control">
          <label>Password check</label>
          <input
            type="password"
            id="checkPassword"
            placeholder="check your password"
          />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"><a href="?connect">Connexion</a></i>
          <small> Error message </small>
        </div>
        <button>submit</button>
      </form>
    </div>
    <!-- script / js -->
    <script src="./script.js"></script>
  </body>
</html>
</body>
</html>