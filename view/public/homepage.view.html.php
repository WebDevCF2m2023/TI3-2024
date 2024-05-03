<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
</head>
<body>
<div id="content">
    <h1>Accueil</h1>

    <nav>
        <ul>
            <li>Accueil</li>
            <li><a href="?json" target="_blank">API</a> format JSON</li>
            <li><a href="?connect">Connexion</a></li>
        </ul>
    </nav>
    
        <h3>Liste de nos lieux</h3>
</div>
    <div id="resultat">
        <div id="map"></div>
        <div id="liste"></div>
    </div>
    
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
     <script src="js\GrandLine.js"></script>
</body>
</html>