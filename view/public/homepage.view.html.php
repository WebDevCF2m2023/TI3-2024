<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Acceuil</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <!-- Responsive navbar -->
    <nav style="background-color: #343a40; padding: 1rem;">
        <div style="margin: 0 auto; max-width: 1200px; display: flex; justify-content: space-between; align-items: center;">
            <button style="background: none; border: none; cursor: pointer; color: white;" type="button" onclick="toggleNavigation()">
                <span style="color: red;"><strong>PUSH</strong> FOR NAVIGATION</span>
            </button>
            <div id="navbarSupportedContent" style="display: none;">
                <ul style="margin: 0; padding: 0; list-style: none; display: flex; justify-content: flex-end; align-items: center;">
                    <li style="margin-right: 1rem;"><a style="color: white; text-decoration: none;" href="?homepage">Acceuil</a></li>
                    <li><a style="color: white; text-decoration: none;" href="?connect">Connexion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header style="background-color: #343a40; padding: 3rem 0;">
        <div style="margin: 0 auto; max-width: 1200px; text-align: center;">
            <h1 style="color: white; font-size: 2.5rem; font-weight: bold; margin-bottom: 1rem;">BD Maps</h1>
            <p style="color: rgba(255, 255, 255, 0.5); font-size: 1.25rem; margin-bottom: 2rem;">Emrah Arpaci CF2000</p>
            <div style="display: flex; justify-content: center;">
                <a style="background-color: #007bff; color: white; text-decoration: none; padding: 0.5rem 1rem; border-radius: 0.5rem;" href="?connect">Connexion</a>
            </div>
        </div>
    </header>
    <div id="content" style="text-align: center; margin-top: 3rem;">
        <h3>Liste des fresques BD</h3>
    </div>
    <div id="content">
        <!-- Leaflet Map Section -->
        <div id="resultat">
            <div id="map"></div>
            <div id="liste"></div>
        </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="../js/carteJSON.js"></script>
    <script>
        function toggleNavigation() {
            var navigation = document.getElementById("navbarSupportedContent");
            navigation.style.display = navigation.style.display === "none" ? "block" : "none";
        }
    </script>
</body>
</html>