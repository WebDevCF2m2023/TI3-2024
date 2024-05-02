<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />


        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
        <link rel="stylesheet" href="css/mapstyle.css">
    </head>

    <body>
        
    <div id="welcome-home">
        <h1>Carte Interactive [ADMIN]</h1>
        <h2>Parcours des endorits connu à Bruxelles</h2>
        

        <a href="?administration">
            <button>Admin Panel</button>
        </a>   
        <a href="?disconnect">
            <button>Deconexion</button>
        </a>    
        
        
    </div>

    <div id="homepage-container">
    <div id="map"></div>
    <div id="liste">
        <h1 style="font-size:30px">Liste des points</h1>
        <h2 style="font-size:20px">Cliquez sur un element dans la liste ci-dessous pour le situer sur la carte</h2>
        <hr>
    </div>
</div>





        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>

        <script src="js/map.js"></script>
    </body>
</html>
