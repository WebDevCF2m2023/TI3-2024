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
<body>
    <div id="global">
    <header>
    <h1>Carte interactive</h1>
    <h2>Parcours BD à Bruxelles</h2>
</header>

    <nav id="nav1">
        <ul>
            <li><a href="./" >Accueil</a></li>
            <li><a href="?connect">Connexion</a></li>
        </ul>
    </nav>
    <!-- Zone d'affichage de la carte -->
    <main>
    <div id="resultats">
    <div id="map"></div>
        <div id="liste">
            <h3>Liste des Points</h3>
            <h4>Cliquez sur un élément dans la liste ci-dessous pour le situer sur la carte</h4>
        </div>
    </div>
</main>
 
     
  
    
     
    
    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
    <script src="js/script.js"></script>
</body>
</html>

