<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- CSS de Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <!-- ma CSS -->
    <link rel="stylesheet" href="css/style2.css">
    <style>
       
    </style>
</head>
<body>
    <h1>Carte interactive</h1>
    <nav id="nav1">
        <ul>
            <li><a href="./">Accueil</a></li>
            <li><a href="?connect">Connexion</a></li>
        </ul>
    </nav>
    <div class="container">
        <div id="map"></div>
        <div id="liste">
            <h2>Les adresses</h2>
        </div>
    </div>
    <!-- JS de Leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
    <!-- monJS -->
    <script src="js/carteJSON.js"></script>
</body>
</html>
