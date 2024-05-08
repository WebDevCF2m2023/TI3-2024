<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <link rel="stylesheet" href="css/home.css">
    <title>Carte interactive Admin</title>
</head>
<body class="bg-light">
    <nav>
        <a href="./">TI3_2024</a>
        <ul>
            <li>
                <a class="active" href="./">Accueil</a>
            </li>
            <li>
                <a href="./?administration">Panel administration</a>
            </li>
            <li>
                <a href="./?disconnect">Se deconnecter</a>
            </li>
        </ul>
    </nav>
    <div id="container">
        <header>
            <h1>Carte interactive Admin</h1>
            <h2>Parcours BD à Bruxelles</h2>
        </header>    
        <div id="map"></div>
        <div id="liste">
            <h3>Liste des points</h3>
            <p>Cliquez sur un élément dans la liste ci-dessous pour le siter sur la carte</p>
            <hr>
        </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
    <script src="js/home.js"></script>
</body>
</html>