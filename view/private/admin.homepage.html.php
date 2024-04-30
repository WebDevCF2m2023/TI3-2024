<?php
include "../view/inc/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
    <title>AdminHomepage</title>
</head>

<body class="bg">
    <header>
        <div class="container">
            <div class="row mb-5">
    <?php 
    include "../view/inc/navAdmin.php";
    ?>
    </div>
    </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col p-5">
                <h2 class="text-center h1">DataAdmin.</h2>
                <?php if(isset($_GET['404'])): ?>
                    
                    <h2 class="text-succes">Insert Done</h2>
                    
                    <?php endif ?>
                    
                    <?php if(isset($message)): ?>
                        <h3><?=$message?></h3>
                        <?php elseif(isset($error)): ?>
                            <h3 class="error"><?=$error?></h3>
                            
                            <?php else: ?>
                                
                            </div>
                        </div>
                        <div class="row">
                        <div class="mb-2 rounded-3" id="map"></div>
                        </div>
                            </div>
                    </div>      
<div class="content">
 <section class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered" data-toggle="table" data-show-columns="true" data-search="false" data-pagination="true" data-checkbox-header="true">
            <thead class="">
            <tr>
            <th class="bg-secondary" data-checkbox="true" data-click-to-select="true">ID</th>
                <th class="text-center bg-light">PLACE</th>
                <th class="text-center text-white bg-secondary">ADRESS</th>
                <th class="text-center bg-light">POSTCODE</th>
                <th class="text-center text-white bg-secondary">CITY</th>
                <th class="text-center bg-light">LAT</th>
                <th class="text-center text-white bg-secondary">LONG</th>
                <th class="text-center bg-light">UPDATE</th>
                <th class="text-center text-white bg-secondary">DELETE</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($ourDatas as $item): ?>
                    <tr>
                <td><?=$item['id']?></td>
                <td><?=$item['nom']?></td>
                <td><?=$item['adresse']?></td>
                <td><?=$item['codepostal']?></td>
                <td><?=$item['ville']?></td>
                <td><?=$item['latitude']?></td>
                <td><?=$item['longitude']?></td>
                <td><a href="?update=<?=$item['id']?>"><img src="img/update.png" width="32" height="32" alt="update" /></a></td>
                <td><a href="?delete=<?=$item['id']?>"><img src="img/garbage.png" width="52" height="32" alt="delete" /></a></td>
            </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
            </div>
            </div>
            </section>
                </div>
        <?php endif; ?>
        </div>
    </div>
    </div>
<?php 
    include "../view/inc/footer.php";
?>
    <script src=" https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>
    <script src="../js/carteJSON.js"></script>
    
</body>
</html>