<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion d'un lieu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">Insertion d'un lieu</h1>
    <nav>
       
            <a class="btn btn-primary" href="./">Accueil de l'administration</a>
            <a class="btn btn-primary" href="?create">Ajouter un lieu</a>
            <a class="btn btn-primary" href="?disconnect">Déconnexion</a>
        
    </nav>
    <div id="content">

        <form method="POST" name="geo" action="">
                <input type="text" name="rue" value="" placeholder="rue" required><br>
                <input type="number" name="codepostal" value="" placeholder="codepostal" required><br>
                <textarea name="ville" placeholder="ville"></textarea><br>
                <input type="number" placeholder="latitude" name="latitude" step="0.000000001" value="" required>
                <input type="number" name="longitude" placeholder="longitude" step="0.000000001" value="" required>
                <input type="submit" value="Insérer">
        </form>
    </div>
</body>
</html>