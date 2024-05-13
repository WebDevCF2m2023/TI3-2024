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
       
      </div>
      <button>submit</button>
    </form>
  </div>
  <!-- script / js -->
  <script src="./script.js"></script>
</body>
</html>