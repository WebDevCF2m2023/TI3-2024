<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="d-flex flex-column h-screen bg-dark">

    <nav class="navbar navbar-expand-sm navbar-light bg-warning shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">GeoMapper<img src="./img/admin.png" alt="admin"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"><img src="./img/menu.png" width="30px" alt="menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?connect">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div id="manutenzione" class="col-md-6 col-sm-8 card shadow-sm bg-image">
                <div class="card-body">
                    <h1 class="h3 mb-3 text-center font-weight-normal">Connectez-vous<img src="./img/admin.png" alt="admin"></h1>

                    <?php
                    
                    if (isset($_POST['username']) && isset($_POST['passwd'])) {
                        $username = $_POST['username'];
                        $password = $_POST['passwd'];

                        
                        if ($username === 'valid_username' && $password === 'valid_password') {
                            
                            header('');
                            exit;
                        } else {
                            $errorMessage = 'Identifiants incorrects. Veuillez réessayer.';
                        }
                    }
                    ?>

                    <form class="form-signin" method="POST" name="connexion">
                        <div class="mb-3">
                            <label for="username" class="form-label">Votre login</label>
                            <input class="form-control" type="text" name="username" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="passwd" class="form-label">Votre mot de passe</label>
                            <input type="password" class="form-control" name="passwd" placeholder="" required>
                        </div>

                        <?php if (isset($errorMessage)) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $errorMessage ?>
                            </div>
                        <?php endif; ?>

                        <button class="btn btn-lg btn-primary btn-block mt-5 bg-dark offset-lg-9 offset-sm-3" type="submit">Connexion</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <style>
        #manutenzione{
            background-color: rgb(255, 193, 7);
            background-image: url(./img/manutenzione.png);
            background-repeat: no-repeat;
            background-size: 570px ;
            background-position: center;

        }
        
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html