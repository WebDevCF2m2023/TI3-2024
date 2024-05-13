<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <title>Admin Delete</title>
</head>
<body>
<div class="container">
        <div id="toolbar">
            <button id="remove" class="btn btn-danger bi bi-trash" disabled>
                Remove
            </button>
          </div>
        <table 
            id="table"
            class="table table-striped"
            data-toggle="table"
            data-toolbar="#toolbar"
            data-show-export="true"
            data-click-to-select="true"
            data-pagination="true"
            data-page-list="[2,4,6,8]"
            data-minimum-count-columns="2"
            data-show-columns="true"
            data-show-columns-toggle-all="true"
            >
    <h1>Admin Delete</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil Admin</a></li>
            <li><a href="?insert">Ajouter une data</a></li>
            <li><a href="?disconnect">Déconnexion</a>       
        </ul>
    </nav>
    
    <div class="content">
        <h2>Delete d'une data</h2>
        <?php if(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php endif ?>
        <input type="number"  name="id" placeholder="id" value="<?=$data['id']?>" disabled><br>
        <input type="text" name="title" placeholder="title" value="<?=$data['nom']?>" disabled><br>
        <textarea name="ourdesc" placeholder="Descrition" disabled><?=$data['adresse']?></textarea><br>
        <input type="number"  name="codepostal" placeholder="codepostal" value="<?=$data['codepostal']?>" disabled><br>
        <input type="number" step="0.0000001" name="latitude" placeholder="latitude" value="<?=$data['latitude']?>" disabled><br>
        <input type="number" step="0.0000001" name="longitude" placeholder="longitude" value="<?=$data['longitude']?>" disabled><br>
        <a href="?delete=<?=$idDelete?>&ok"><button>Supprimer</button></a> | <a href="./"><button>Ne pas supprimer</button></a>

    </div>
</body>
</html>