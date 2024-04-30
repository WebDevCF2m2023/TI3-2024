<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin Delete</title>
</head>
<body>
<div class="container py-4">
    <h1 class="text-center text-4xl font-bold mb-8">Admin Delete</h1>
    <p class="text-center text-lg text-gray-800">Suppression d'un lieu dans la DB.</p>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light my-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">Accueil Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?insert">Ajouter une data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?disconnect">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="py-12">
        <?php if(isset($message)): ?>
            <h3><?=$message?></h3>
        <?php elseif(isset($error)): ?>
            <h3 class="error"><?=$error?></h3>
        <?php else: ?>
            <h4 class="text-2xl">nom : <?=$data['nom']?></h4>
            <p class="text-2xl"><?=$data['adresse']?></p>
            <p class="text-2xl">Latitude : <?=$data['latitude']?></p>
            <p class="text-2xl">Longitude : <?=$data['longitude']?></p>
            <hr>
            <h2 class="text-center mt-8 text-2xl">Voulez-vous vraiment supprimer cette data ?</h2>
            <div class="d-grid gap-2 col-6 mx-auto mt-4">
                <a href="?delete=<?=$data['id']?>&confirm" class="btn btn-danger">Oui</a>
                <a href="./" class="btn btn-secondary">Non</a>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>