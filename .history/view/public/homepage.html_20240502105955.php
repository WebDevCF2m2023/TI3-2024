<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/tooplate-wave-cafe.css">
     <link rel="stylesheet" href="css/map.css">
    <title>Accueil</title>
</head>
<body>
<header>
    <h1>Carte Interactive</h1><br>
    <h2>Liste des Bibliothèques de Bruxelles</h2>
    <a href="/?connect"><button>connection à <br> L'administration</button></a>
 
</header>
        <div id="container">
        <div id="map"></div>
        <div id="liste">
            <h1>Liste des  Bibliothèques de Bruxelles</h1>
            <h2>Cliquez sur un élément ci-desous pour le situer sur la carte </h2>
        </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
    <script src="js/map.js"></script>
</body>
</html>