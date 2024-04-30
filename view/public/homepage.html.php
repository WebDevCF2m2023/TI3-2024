<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="crossorigin=""/>
    <link rel="stylesheet" href="css/styles.css">

    <title>Accueil</title>
</head>
<body>
    <div id="home">
        <h1>Carte Interactive</h1>
        <h2>Parcours des bornes électriques à Bruxelles</h2>
        
        <a href="/?login">
            <button>Connexion a l'administration</button>
        </a>
        
    </div>

    <div id="container">
        <div id="map"></div>
        <div id="liste">
            <h1>Liste des points</h1>
            <h2>Cliquez sur un element dans la liste ci-dessous pour le situer sur la carte</h2>
            <hr>
        </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="js/js.js"></script>
</body>
</html>
