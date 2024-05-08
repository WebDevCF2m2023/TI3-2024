<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
</head>

<body>
    <div class="container py-4">
        <h1 class="text-center mb-4">Admin Homepage</h1>
        <p class="text-center text-lg text-muted">Administration des lieux sur notre site.</p>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-primary my-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="./">Accueil Admin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="?insert">Ajouter une location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?disconnect">Déconnexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="py-4">
            <h2 class="text-center mb-4"style="color: red;">Administration de nos données</h2>
            <?php if(isset($message)): ?>
                <div class="alert alert-success" role="alert">
                    <?=$message?>
                </div>
            <?php elseif(isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?=$error?>
                </div>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Adresse</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($ourDatas as $item): ?>
                                <tr>
                                    <td><?=$item['id']?></td>
                                    <td><?=$item['nom']?></td>
                                    <td><?=$item['adresse']?></td>
                                    <td><?=$item['latitude']?></td>
                                    <td><?=$item['longitude']?></td>
                                    <td><a href="?update=<?=$item['id']?>"><img src="img/update.png" width="32" height="32" alt="update" /></a></td>
                                    <td><a href="?delete=<?=$item['id']?>"><img src="img/delete.png" width="32" height="32" alt="delete" /></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
