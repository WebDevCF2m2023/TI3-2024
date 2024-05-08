<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
    <title>Admin Update</title>
</head>
<body style="background-color: #f0f6ff;">
<div class="container py-4">
    <h1 class="text-center text-4xl font-bold mb-8" style="color: #007bff;">Admin Update</h1>
    <p class="text-center text-lg text-muted">Mettre à jour un lieu dans la DB.</p>
    
    <nav class="navbar navbar-expand-lg navbar-light  my-4" style="background-color: #007bff;">
        <div class="container-fluid">
            <a class="navbar-brand" href="./" style="color: white;">Accueil Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?insert" style="color: white;">Ajouter une data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?disconnect" style="color: white;">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="py-12">
        <h2 class="text-2xl font-bold" style="color: #007bff;">Update d'une adresse</h2>
        <?php if(isset($error)) echo "<h3 class='error'>$error</h3>"; ?>
        <br>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="" name="id" method="POST">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" value="<?=$data['nom']?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <textarea class="form-control" id="adresse" name="adresse" rows="3" placeholder="adresse" required><?=$data['adresse']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="latitude" class="form-label">Latitude</label>
                        <input type="number" class="form-control" id="latitude" name="latitude" step="0.00000000001" placeholder="Latitude" value="<?=$data['latitude']?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="longitude" class="form-label">Longitude</label>
                        <input type="number" class="form-control" id="longitude" name="longitude" step="0.00000000001" placeholder="Longitude" value="<?=$data['longitude']?>" required>
                    </div>
                    <input type="hidden" name="id" value="<?=$data['id']?>" />
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>
    </div>
    
<div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(114,137,218,0.7)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(114,137,218,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(114,137,218,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#7289da" />
            </g>
        </svg>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
