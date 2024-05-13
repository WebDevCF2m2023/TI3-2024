<!DOCTYPE html>
<html lang="fr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="alternate" hreflang="cs" href="https://www.phpcrudgenerator.com/admin/home?lang=cs">
    <link rel="alternate" hreflang="de" href="https://www.phpcrudgenerator.com/admin/home?lang=de">
    <link rel="alternate" hreflang="en" href="https://www.phpcrudgenerator.com/admin/home?lang=en">
    <link rel="alternate" hreflang="es" href="https://www.phpcrudgenerator.com/admin/home?lang=es">
    <link rel="alternate" hreflang="fr" href="https://www.phpcrudgenerator.com/admin/home?lang=fr">
    <link rel="alternate" hreflang="it" href="https://www.phpcrudgenerator.com/admin/home?lang=it">
    <link rel="alternate" hreflang="pt-br" href="https://www.phpcrudgenerator.com/admin/home?lang=pt-br">
    <meta name="description" content="PHP CRUD GENERATOR - Bootstrap admin dashboard with CRUD functionnalities. This admin panel is built with the MySQL Sakila Database for demo purposes">
    <link href="https://www.phpcrudgenerator.com/admin/home?lang=en" rel="canonical">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/pace-theme-minimal.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/themes/default/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/themes/default/admin.min.css" type="text/css">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/OverlayScrollbars.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/OverlayScrollbar-os-theme-round-dark.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/footable.bootstrap.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/pickadate/lib/compressed/themes/classic.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/pickadate/lib/compressed/themes/classic.date.css" type="text/css" media="screen">
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
                <th>nom</th>
                <th>adresse</th>
                <th>codepostal</th>
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