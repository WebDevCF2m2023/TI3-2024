<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="./">Accueil</a></li>
            <li><a href="?connect">Connexion</a>
        </ul>
    </nav>
    <form action="" method="POST" name="connexion">
        <input type="text" name="username" placeholder="Votre login" required><br>
        <input type="password" name="passwd" placeholder="Votre mot de passe" required><br>
        <input type="submit" value="connexion">









        <link rel="stylesheet" href="form.css" />
    <title>Form Validation js</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
      <h1>Connexion</h1>
        <?php if(isset($error)): ?>
        <h3 class="error"><?=$error?></h3>
        <?php endif ?>
      </div>
      <form action="" name="ourdatas" method="POST" class="form" id="form">
        <div class="form-control">
          <label>nom</label>
          <input
            type="text"
            name="nom"
            placeholder="nom"
            value="<?=$update['nom']?>"
            required
          /><br />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small> Error message </small>
        </div>
        <div class="form-control">
          <label>adresse</label>
          <input
            name="adresse"
            placeholder="adresse"
            value="<?=$update['adresse']?>"
            required
          /><br />

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
          <i class="fas fa-exclamation-circle"></i>
          <small> Error message </small>
        </div>
        <button>submit</button>
      </form>
    </div>
    <!-- script / js -->
    <script src="./script.js"></script>
  </body>
</html>
    </form>
    <?php
    // var_dump($_POST);
    ?>
</body>
</html>