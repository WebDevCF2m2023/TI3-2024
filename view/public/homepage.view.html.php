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
    <h1>Carte interactive</h1>
    <h2>Parcours BD à Bruxelles</h2>
   
   
          
            <a href="?json">API</a>
            <a class="con" href="?connect">Connexion à l'administration</a>
       
 
   
    <!-- Zone d'affichage de la carte -->

    <div id="resultats">
        <div id="map"></div>
        <div id="liste"></div>
    </div>
    
    <!-- JS de Leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
     
  
    
     
    </div>
    <script src="js/script.js"></script>
</body>
</html>

