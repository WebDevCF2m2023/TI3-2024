<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
    <title>Admin Insertion</title>
</head>
<body style="background-color: #f0f6ff;">
<div class="container py-4">
    <h1 class="text-center text-4xl font-bold mb-8" style="color: #007bff;">Admin Insertion</h1>
    <p class="text-center text-lg text-muted">Insertion d'un nouveau lieu dans la DB.</p>
    
    <nav class="navbar navbar-expand-lg navbar-light my-4" style="background-color: #007bff;">
        <div class="container-fluid">
            <a class="navbar-brand" href="./" style="color: white;">Accueil Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?insert" style="color: white;">Ajouter une localisation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?disconnect" style="color: white;">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php if(isset($error)) echo "<h3 class='text-danger'>$error</h3>"; ?>
    <form action="" name="localisations" method="POST" class="py-12">
        <h2 class="text-2xl font-bold" style="color: #007bff;">Ajoutez votre lieu</h2>
        <div class="mt-8 max-w-md">
            <div class="grid grid-cols-1 gap-6">
                <label class="block">
                    <span class="text-gray-700">Nom</span>
                    <input type="text" class="form-control mt-1" name="nom" placeholder="Nom" required>
                </label>
                <label class="block">
                    <span class="text-gray-700">Adresse</span>
                    <textarea class="form-control mt-1" rows="3" name="adresse" placeholder="Adresse" required></textarea>
                </label>
                <label class="block">
                    <span class="text-gray-700">Latitude</span>
                    <input type="number" class="form-control mt-1" step="0.00000000001" name="latitude" placeholder="Latitude" required>
                </label>
                <label class="block">
                    <span class="text-gray-700">Longitude</span>
                    <input type="number" class="form-control mt-1" step="0.00000000001" name="longitude" placeholder="Longitude" required>
                </label>
                <input type="submit" class="btn btn-primary mt-4" value="Insérer">
            </div>
        </div>
    </form>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
