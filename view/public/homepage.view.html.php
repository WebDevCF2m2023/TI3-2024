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
    <div id="global"></div>
    
    
    <header>
    <h1>Carte interactive</h1>
    <h2>Parcours BD à Bruxelles</h2>
</header>
   
          
      <nav>      
    <a  href="?connect">Connexion à l'administration</a>
    </nav> 
 
   
    <!-- Zone d'affichage de la carte -->
    <main>
    <div id="resultats">
        <div id="map"></div>
</main>
<div class="listepoint">
<h3>Liste des points</h3>
<h4>Cliquez sur un élément dans la liste ci-dessous pour le situer sur la carte</h4>
</div>
<hr>
<aside>
        <div id="liste"></div>
    </div>
    </aside> 
 
     
  
    
     
    </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
    <script src="js/script.js"></script>
</body>
</html>

