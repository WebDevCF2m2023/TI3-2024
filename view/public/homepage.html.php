
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="crossorigin=""/>
    <link rel="stylesheet" href="css/styles.css">
    <title>Accueil | Centres Culturels | Bruxelles</title>
</head>
    <div id="title-conatiner">
        <h1>Carte Interactive</h1>
        <h2>Centres Culturels à Bruxelles</h2>
        <a href="/?login">
            <button id="btnConnectHome">Connexion à l'administration</button>
        </a>
    </div>
 
    <div id="main-container"> 
        <div id="map"></div>
        <div id="liste">
        <h1 id="h1Liste">Liste des points</h1>
        <h2 id="h2Liste">Cliquez sur un élément dans la liste ci-dessous pour le situer sur la carte</h2>
        </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="js/js.js"></script>
</body>
</html>