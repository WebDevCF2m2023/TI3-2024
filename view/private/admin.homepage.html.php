<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm mb-5">
  <div class="container">
    <a class="navbar-brand" href="#">GeoMapper<img src="./img/admin.png" alt="admin"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fas fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Accueil Admin</a>
        </li>
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


  <div class="container py-6">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header bg-dark bg-gradient">
            <h1 class="text-light">Admin Editor</h1>
            <p class="card-text text-warning">NOTE : Ici vous pouvez editer les lieux maps de GeoMapper.</p>
          </div>
          <div class="card-body">

            <?php if (isset($message)) : ?>
              <div class="alert alert-success" role="alert">
                <?= $message ?>
              </div>
            <?php elseif (isset($error)) : ?>
              <div class="alert alert-danger" role="alert">
                <?= $error ?>
              </div>
            <?php else : ?>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Adresse</th>
                      <th scope="col">Code postal</th>
                      <th scope="col">Ville</th>
                      <th scope="col">Latitude</th>
                      <th scope="col">Longitude</th>
                      <th scope="col">Modifier</th>
                      <th scope="col">Supprimer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($lesVilles as $item) : ?>
                      <tr>
                        <th scope="row"><?= $item['id'] ?></th>
                        <td><?= $item['nom'] ?></td>
                        <td><?= $item['adresse'] ?></td>
                        <td><?= $item['codepostal'] ?></td>
                        <td><?= $item['ville'] ?></td>
                        <td><?= $item['latitude'] ?></td>
                        <td><?= $item['longitude'] ?></td>
                        <td class="text-center"><a href="?update=<?= $item['id'] ?>"><img src="img/update.png" width="32" height="32" alt="update" /></a></td>
                        <td class="text-center"><a href="?delete=<?= $item['id'] ?>"><img src="img/delete.png" width="32" height="32" alt="delete" /></a></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>