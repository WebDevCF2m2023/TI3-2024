<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            background-color: #1a1a28;
            opacity: 0.9;
            background-size: 10px 10px;
            background-image: repeating-linear-gradient(45deg, #466be8 0, #466be8 1px, #1a1a28 0, #1a1a28 50%);
        }
    </style>
</head>
<body>





    
<div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="p-3 rounded shadow border border-4 border-primary" style="background-color: #f8f9fa;">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center">
                            <div class="p-3 rounded shadow" style="background-color: #1a1a28; background-image: repeating-linear-gradient(45deg, #466be8 0, #466be8 1px, #1a1a28 0, #1a1a28 50%); box-shadow: 0 20px 20px rgba(0,0,0,0.7), 0px 0px 50px rgba(0,0,0,0.1); transform: perspective(1000px) rotateX(5deg) rotateY(10deg) scale(1.1);">
                                <img src="img/login.png" alt="Cool Image" class="img-fluid rounded-5 mb-3 border border-5 border-primary">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border border-3 border-primary rounded-4" style="box-shadow: 0 20px 20px rgba(0,0,0,0.1), 0px 0px 50px rgba(0,0,0,0.1); background: linear-gradient(to right, #f8f9fa, #e9ecef);">
                                <div class="card-header bg-primary text-white">Se connecter</div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <?php if(isset($error)): ?>
                                            <div class="alert alert-danger"><?= $error === false ? "Nom de compte ou mot de passe incorrect" : $error ?></div>
                                        <?php endif ?>
                                        <div class="mb-3">
                                            <label for="user" class="form-label">Nom d'utilisateur</label>
                                            <input type="text" class="form-control" id="user" aria-describedby="user" name="user">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Mot de passe</label>
                                            <input type="password" class="form-control" id="password" name="password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Se connecter</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
        document.querySelector('.card').addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.05)';
        });
        document.querySelector('.card').addEventListener('mouseout', function() {
            this.style.transform = 'scale(1)';
        });
    </script>
</body>
</html>