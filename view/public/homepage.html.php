<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- CSS de Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- ma CSS -->
    <link rel="stylesheet" href="./css/carteJSON.css">
    
   
</head>

<body>
<nav class="navbar-home">
  <div class="container">  <h1>GeoMapper <img src="./img/logo.png" alt="logo" width="25px"></h1>
    <ul class="navbar-links">  </ul>
    <button  class="connect-btn"><a href="?connect">Connexion</a></button>  </div>
</nav>



    <div class="titre">

        <h1>Les listes de GeoMapper</h1>

    </div>
        <div id="resultats">
            <div id="carte" class="elemento1"></div>
            
            <div id="liste"></div>
        </div>


    </div>
    <!-- JS de Leaflet -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    
    <script src="js/carteJSON.js"></script>

</body>

</html>: