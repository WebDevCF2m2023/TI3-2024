<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil</a></li>
            <li><a href="?connect">Connexion</a>
        </ul>
    </nav>
    
        <input type="text" name="username" placeholder="Votre login" required><br>
        <input type="password" name="passwd" placeholder="Votre mot de passe" required><br>
        <input type="submit" value="connexion">
    </form>
    <?php
    // var_dump($_POST);
    ?>

    <form action="" method="POST">
        <label>Login</label>
        <input
        name="username"
          type="text"
          id="username"
          placeholder="Enter your Login"
        />
        
        <label>Password</label>
        <input
        name="passwd"
          type="password"
          id="password"
          placeholder="Enter your password"
        />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small> Error message </small>

      <div class="form-control">
        <label>Password check</label>
        <input
          type="password"
          id="checkPassword"
          placeholder="check your pas
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