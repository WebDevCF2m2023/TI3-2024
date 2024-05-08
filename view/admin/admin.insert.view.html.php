<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion d'un lieu</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container text-center">

        <h1 id="hacheUn">Insertion d'un lieu</h1>

        <nav>
            <div>
                <h6><a href="./">Accueil de l'administration</h6>
                <h6><a href="?create">Ajouter un lieu</a></h6>
                <h6><a href="?disconnect">Déconnexion</a></h6>
            </div>
        </nav>
    </div>

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-6">
            <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                    <div class="col-md-12 col-lg-12 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                            
                            <div id="content">

                                <form method="POST" name="geo" action="">
                                    
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" name="nom" value="" placeholder="nom" 
                                        id="form2Example17" class="form-control form-control-lg" required><br>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" name="adresse" value="" placeholder="adresse" 
                                        id="form2Example17" class="form-control form-control-lg" required><br>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" name="codepostal" value="" placeholder="codepostal" 
                                            id="form2Example17" class="form-control form-control-lg" required><br>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="number" placeholder="latitude" name="latitude" step="0.000000001" 
                                            value="" id="form2Example17" class="form-control form-control-lg" required>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="number" name="longitude" placeholder="longitude" step="0.000000001" 
                                            value="" id="form2Example17" class="form-control form-control-lg" required>
                                    </div>

                                    <div class="pt-1 mb-4">
                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" 
                                    type="submit" value="Insérer">Insérer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</body>
</html>