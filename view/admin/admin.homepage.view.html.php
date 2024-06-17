<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Accueil de l'administration</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.5/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="css/ImagineNotUsingBootstrap.css">
</head>
<body>

<section class="vh-100" style="background-color: rgb(131, 194, 162);" >
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <h1>Accueil de l'administration</h1>
            <nav>
                <ul>
                    <li>Accueil de l'administration</li>
                    <li><a href="?create">Ajouter un lieu</a></li>
                    <li><a href="?disconnect">Déconnexion</a></li>
                </ul>
            </nav>

            <div id="content">
                <h3>Liste de nos lieux</h3>
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
                <h3>Il y a <?=$nb?> <?=$nb>1 ? "lieux" : "lieu"?></h3>

                <table class="table table-striped table-hover" id="table" data-toggle="table"data-search="true" data-height="460" data-pagination="true">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nom</th>
                            <th>adresse</th>
                            <th>codepostal</th>
                            <th>latitude</th>
                            <th>longitude</th>
                            <th>update</th>
                            <th>delete</th>
                        </tr>
                    </thead>

                    <tbody>
                    
                        <?php
                        
                        foreach($datas as $data):
                        ?>
                        <tr>
                            <td><?=$data['id']?></td>
                            <td><?=$data['nom']?></td>
                            <td><?=$data['adresse']?></td>
                            <td><?=$data['codepostal']?></td>
                            <td><?=$data['latitude']?></td>
                            <td><?=$data['longitude']?></td>
                            <td><a href="?update=<?=$data['id']?>"><img src="img/pen.svg" alt="update" /></a></td>
                            <td><a href="?delete=<?=$data['id']?>"><img src="img/trash.svg" alt="delete" /></a></td>

                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <?php endif ?>   
            </div>
        </div>
    </div>
</div>
</section>

<script src="JustKillCssAlready.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.5/dist/bootstrap-table.min.js"></script>
</body>
</html>