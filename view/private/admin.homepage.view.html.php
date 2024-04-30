<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil de l'administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<body>
<a class="navbar-brand" href="./" >Accueil</a>
    <h1 class="text-center">Accueil de l'administration</h1>
    
      
            <div class="container">
            <a class="btn btn-primary col-4 offset-4 mt-3" href="?create">Ajouter un lieu</a>
            <div class="row"> <div class="col"></div></div>
            <a class="btn btn-danger col-4 offset-4 mt-3"  href="?disconnect">Déconnexion</a>
            </div>

    <div id="content">
        <h3 class="text-center">Liste de nos lieux</h3>
        <?php
        // datas est une chaîne de caractère : erreur SQL !
        if(is_string($datas)):
        ?>
            <h3 id="alert"><?=$datas?></h3>
        <?php
        // Pas encore de `geoloc`
        elseif(empty($datas)):
        ?>
            <h3 id="comment">Pas encore de lieu.</h3>
        <?php
        // Nous avons des lieux
        else:
            // on compte le nombre de données 
            $nb = count($datas);
        ?>
        <h3 class="text-center">Il y a <?=$nb?> <?=$nb>1 ? "lieux" : "lieu"?></h3>
        <table class="table table-dark table-hover">
        <tr>
                <th>id</th>
                <th>rue</th>
                <th>code postal</th>
                <th>ville</th>
                <th>latitude</th>
                <th>longitude</th>
                <th>update</th>
                <th>delete</th>
            </tr>
            
            <?php
            // tant qu'on a des données
            // var_dump($datas);
            foreach($datas as $data):
            ?>
            <tr>
                <td><?=$data['id']?></td>
                <td><?=$data['rue']?></td>
                <td><?=$data['codepostal']?></td>
                <td><?=$data['ville']?></td>
                <td><?=$data['latitude']?></td>
                <td><?=$data['longitude']?></td>
                <td><a href="?update=<?=$data['id']?>"><img src="img/edit.png" alt="update" /></a></td>
                <td><a href="?delete=<?=$data['id']?>"><img src="img/delete-file.png" alt="delete" /></a></td>

            </tr>
        <?php endforeach ?>
</table>
        
        <?php endif ?>   
    </div>
</body>
</html>