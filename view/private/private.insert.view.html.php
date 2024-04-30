<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion d'un lieu</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require_once "../view/inc/navbar.admin.php";
    ?>
    <form method="POST" >
        <div class="container border-start border-end border-success rounded-5 p-4">
        <div class="row mb-4 mt-5">
            <div class="col">   
                <div data-mdb-input-init class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" name="nom" placeholder="Nom" required/>
                </div>
            </div>
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="text" name="adresse" id="form3Example2" class="form-control" placeholder="Adresse"  required/>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-4 col-sm-4 col-md-4" >
                <div data-mdb-input-init class="form-outline text-wrap">
                    <input type="number" id="form3Example1" class="form-control" name="codepostal" placeholder="Code Postal" required/>
                </div>
            </div>
            <div class="col-3 col-sm-4 col-md-4">
                <div data-mdb-input-init class="form-outline">
                    <input type="text" name="ville" id="form3Example2" class="form-control" placeholder="Ville"  required/>
                </div>
            </div>
            <div class="col-5 col-sm-4 col-md-4">
                <div data-mdb-input-init class="form-outline">
                    <input type="number" name="nb_velos" id="form3Example2" class="form-control" placeholder="Nombre de vélos"  required/>
                </div>
            </div>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="number" step="0.000000001"  name="latitude" id="form3Example3" class="form-control" placeholder="Latitude" required/>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="number" step="0.000000001"  name="longitude" id="form3Example4" class="form-control" placeholder="Longitude" required/>
        </div>
        <div class="text-center">
            <button data-mdb-ripple-init type="submit" class="btn btn-outline-success btn-rounded mb-4">Ajouter</button>
        </div>
    </div>
    </form>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>