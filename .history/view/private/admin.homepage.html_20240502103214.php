<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Admin Homepage</title>
</head>
<body>
    <h1>Admin Homepage</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil Admin</a></li>
            <li><a href="?insert">Ajouter une data</a></li>
            <li><a href="?disconnect">Déconnexion</a>
            
        </ul>
    </nav>
    <div class="content">
        <h2>Administration de nos datas</h2>
        <?php if(isset($_GET['zut'])): ?>

            <h2>Insertion réussie</h2>
            
        <?php endif ?>

        <?php  if(isset($message)): ?>
                <h3><?=$message?></h3>
        <?php elseif(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        
        <?php else: ?>
            <!-- modèle de tableau à remplir avec le foreach -->
        <table>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>Nosdesc</th>
                <th>latitude</th>
                <th>longitude</th>
                <th>Modifier</th>
                <th>supprimer</th>
            </tr>
                <?php foreach($NosDatas as $item): ?>
                    <tr>
                <td><?=$item['id']?></td>
                <td><?=$item['nom']?></td>
                <td><?=$item['adresse']?></td>
                <td><?=$item['codepostal']?></td>
                <td><?=$item['latitude']?></td>
                <td><?=$item['longitude']?></td>
                <td><a href="?update=<?=$item['id']?>"><img src="img/update.png" width="32" height="32" alt="update" /></a></td>
                <td><a href="?delete=<?=$item['id']?>"><img src="img/delete.png" width="32" height="32" alt="delete" /></a></td>
            </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
</body>
</html>