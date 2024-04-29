<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
</head>
<body>
<header>
<div class="navbar">
<nav>
<ul>
<a href="?accueil"><span class="Gnav">G</span><span class="unav">u</span><span class="inav">i</span><span class="gnav">g</span><span class="lnav">l</span><span class="enav">e</span><span class="Mnav">Maps</span></a>
    <li>
    <a  href="?accueil">WELCOME</a></li>
    <li>
    <a href="?connect">LOGIN</a></li>
</ul>
</nav>
</div>
</header>


<div id="titleHome">
        <h1 id="welcome"><span class="G">G</span><span class="u">u</span><span class="i">i</span><span class="g">g</span><span class="l">l</span><span class="e">e</span></h1>
</div>

<main>            
<div id="resultat">
    <div id="map"></div>
    <div id="liste"></div>
</div>
</main>
</div>


<script src=" https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="../js/carteJSON.js"></script>
</body>
</html>