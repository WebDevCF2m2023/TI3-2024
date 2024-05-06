<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.5/dist/bootstrap-table.min.css">
    <link rel="shortcut icon" href="/img/favicon-32x32.png" type="image/x-icon">
    <title>Administration</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success mb-4 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-3 text-light link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" >Centres Culterels</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link text-dark link-light link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover" aria-current="page" href="/?admin">Panel Administration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark link-light link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover" href="/?disconnect">Se deconnecter</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if(isset($_GET['updateOK'])) : ?>
            <h2 class="text-center mb-4 text-success text-uppercase ">Le centre culturel ID <strong class="text-primary"><?=$_GET['updateOK']?></strong> a bien été modifié.</h2>
        <?php endif ?>
        <?php if(isset($_GET['deleteOK'])) : ?>
            <h2 class="text-center mb-4 text-success text-uppercase fw-bold">Le centre culturel ID <strong class="text-primary"><?=$_GET['deleteOK']?></strong> a bien été <strong class="text-danger">supprimé</strong>.</h2>
        <?php endif ?>
        <?php if(isset($_GET['deleteKO'])) : ?>
            <h2 class="text-center mb-4 text-danger  text-uppercase">Le centre culturel ID <strong class="text-primary"><?=$_GET['deleteKO']?></strong> <strong>n'a pas</strong> été supprimé.</h2>
        <?php endif ?>
        <?php if(isset($_GET['addOK'])) : ?>
            <h2 class="text-center mb-4 text-success text-uppercase">Le centre culturel ID <strong class="text-primary"><?=$_GET['addOK']?></strong> a bien été crée.</h2>
        <?php endif ?>
        <?php if(is_string($locations)) : ?>
            <h2 class="text-danger text-center"><?= $locations ?></h2>
        <?php else: ?>
            <div class="mb-2">
                <a href="?addLocation">
                    <button type="button" class="btn btn-success mb-4 mt-4">
                    <img src="img/add.png" alt="Icone add" width="32">
                        Ajoutez un Centre Culturel
                    </button>
                </a>
            </div>

            <div class="table-responsive">
            <h1 id="listeCentres" class="text-success">Liste des Centres Culturels à Bruxelles</h1>
            <table class="table table-bordered border-success table-success table-striped table-hover " 
            data-toggle="table" 
            data-show-columns="true" 
            data-search="true" 
            data-pagination="true" 
            data-checkbox-header="false"
            data-page-list="[5,10,20,25,50]"
            data-resizable="true">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Code Postal</th>
                        <th scope="col">Ville</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                        <?php foreach($locations as $location) : ?>
                            <tr>
                                <th scope="row"><?= $location['id'] ?></th>
                                <td><?= $location['nom'] ?></td>
                                <td><?= $location['adresse'] ?></td>
                                <td><?= $location['codepostal'] ?></td>
                                 <td><?= $location['ville'] ?></td>
                                <td><?= $location['latitude'] ?></td>
                                <td><?= $location['longitude'] ?></td>
                                 <td class="ps-4"><a href="?update=<?= $location['id'] ?>"><img src="img/edit.png" alt="Icone modifier" width="30"></a></td>
                                <td class="ps-4"><a href="?delete=<?= $location['id'] ?>"><img src="img/delete.png" alt="Icone supprimer" width="30"></a></td>
                            </tr>
                        <?php endforeach ?>
                </tbody>
            </table>
           <?php endif ?>
        </div>        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.5/dist/bootstrap-table.min.js"></script>
</body>
</html>