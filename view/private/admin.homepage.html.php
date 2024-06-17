<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.5/dist/bootstrap-table.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/carteJSON.css">
    <title>Admin Homepage</title>
</head>
<body>
    <div class="antialiased text-gray-900 px-6">
        <div class="max-w-xl mx-auto py-12 divide-y md:max-w-8xl">
            <div class="py-8">
                <h1 class="text-4xl font-bold">Carte interactive</h1>
                <p class="mt-2 text-lg text-gray-800">
                    Base Wifi de Bruxelles
                </p>
            </div>
            <nav class="container">
                <ol role="list" class="flex items-center space-x-2 lg:space-x-5 ms-4">
                    <li class="flex items-center justify contente col-3">
                    <a href="./">Accueil</a>
                    
                </li>
                <li>
                    <div class="flex items-center ">
                        <a href="?insert">Ajouter une data</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center col-5">
                        <a href="?disconnect">Déconnexion</a>
                    </div>
                </li>
            </ol>
        </nav>
        <div class="py-12">
            <h3 class="text-2xl font-bold">Administration de nos datas</h3>
            <div class="mt-8 max-w-md">
                <div class="grid grid-cols-1 gap-6">
                    <?php if(isset($message)): ?>
                        <h3><?=$message?></h3>
                        <?php elseif(isset($error)): ?>
                            <h3 class="error"><?=$error?></h3>
                            <?php else: ?>
                                <!-- modèle de tableau à remplir avec le foreach -->
                                <table class="border-collapse border border-slate-600">
                                    <thead>
                                    <tr>
                                        <th data-sortable="true" class="border border-slate-600">id</th>
                                        <th class="border border-slate-600">Nom</th>
                                        <th class="border border-slate-600">Adresse</th>
                                        <th class="border border-slate-600">latitude</th>
                                        <th class="border border-slate-600">longitude</th>
                                        <th class="border border-slate-600">Modifier</th>
                                        <th class="border border-slate-600">supprimer</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($ourDatas as $item): ?>
                    <tr>
                        <td class="text-center"><?=$item['id']?></td>
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

    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.5/dist/bootstrap-table.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>

</body>
</html>