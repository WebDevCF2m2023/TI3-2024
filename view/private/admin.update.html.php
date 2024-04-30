<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Update</title>
</head>
<body>
    <h1>Admin Update</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil Admin</a></li>
            <li><a href="?insert">Ajouter une data</a></li>
            <li><a href="?disconnect">Déconnexion</a>       
        </ul>
    </nav>
    <div class="content">
        <h2>Modification d'une data</h2>
        <?php if(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php endif ?>
       <form action="" name="ourdatas" method="POST">
        <input type="text" name="nom" placeholder="nom" value="<?=$update['nom']?>" required><br>
        <input name="adresse" placeholder="adresse" value="<?=$update['adresse']?>" required><br>
        <input type="number"  name="codepostal" placeholder="codepostal" value="<?=$update['codepostal']?>" required><br>
        <input type="number" step="0.0000001" name="latitude" placeholder="latitude" value="<?=$update['latitude']?>" required><br>
        <input type="number" step="0.0000001" name="longitude" placeholder="longitude" value="<?=$update['longitude']?>" required><br>
        <input type="hidden" name="id" value="<?=$update['id']?>">
        <input type="submit" value="Mettre à jour" />
       </form>
    </div>
</body>
</html>