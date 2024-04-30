<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin Homepage</title>
    <style>
        /* Additional CSS styles if needed */
    </style>
</head>
<body class="bg-gray-100">
    <div class="container py-4">
        <h1 class="text-center mb-4">Admin Homepage</h1>
        <p class="text-center text-lg text-gray-800">Administration des lieux sur notre site.</p>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light my-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="./">Accueil Admin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
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

        <div class="py-12">
            <h2 class="text-2xl font-bold">Administration de nos données</h2>
            <div class="mt-8 max-w-md">
                <div class="grid grid-cols-1 gap-6">
                    <?php if(isset($message)): ?>
                        <h3><?=$message?></h3>
                    <?php elseif(isset($error)): ?>
                        <h3 class="error"><?=$error?></h3>
                    <?php else: ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Latitude</th>
                                    <th scope="col">Longitude</th>
                                    <th scope="col">Modifier</th>
                                    <th scope="col">Supprimer</th>
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
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-6uAhkp9lKBKZHpP5WfJFLtcveY5gRPfU8Q7i4vE5/5ySA3oW7guQ/nrCk2GOs9Hv" crossorigin="anonymous"></script>
</body>
</html>
