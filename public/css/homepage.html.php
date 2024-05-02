<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <link rel="stylesheet" href="css/map.css">
    <title>Accueil</title>
</head>
<body>
<header>
    <h1>carte interactive</h1><br>
    <h2>les stations Cambio 🚗</h2>
    <a href="/?connect"><button>connection a <br> l'administration</button></a>
</header>
        <div id="container">
        <div id="map"></div>
        <div id="liste"></div>
    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
    <script src="js/map.js"></script>
</body>
</html>