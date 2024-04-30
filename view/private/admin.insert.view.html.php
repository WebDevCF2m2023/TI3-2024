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
<body class="bg-dark">
    <h1 class="text-center text-white">Insertion d'un lieu</h1>
    <nav>
       
            <a class="btn btn-info col-4 offset-4 mt-3 text-white" href="./">Accueil de l'administration</a>
            <a class="btn btn-success col-4 offset-4 mt-3 text-white" href="?create">Ajouter un lieu</a>
            <a class="btn btn-danger col-4 offset-4 mt-3 text-white" href="?disconnect">Déconnexion</a>
        
    </nav>
   
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Rue</th>
      <th scope="col">Code postal</th>
      <th scope="col">Ville</th>
      <th scope="col">Latitude</th>
      <th scope="col">Longitude</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <form method="POST" name="geo" action="">
      <th scope="row"></th>
      <td><input type="text" name="rue" value="" placeholder="rue" required></td>
      <td> <input type="number" name="codepostal" value="" placeholder="codepostal" required></td>
      <td><textarea name="ville" placeholder="ville"></textarea></td>
      <td><input type="number" placeholder="latitude" name="latitude" step="0.000000001" value="" required></td>
      <td><input type="number" name="longitude" placeholder="longitude"  step="0.000000001" value="" required></td>
      <td><input type="submit" value="Insérer"></td>
    </tr>
    </form>
  </tbody>
</table>
</body>
</html>