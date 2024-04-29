<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrap table -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
</head>
<body>
    <h1>Carte interactive</h1>
    <h2>Liste théatres à Bruxelles</h2>
    <p id="login-link"><a href="./?p=login">Connexion à l'administration</a></p>
    <h4 id="nb-locations"></h4>
    <main>
        <div id="map"></div>
        <!-- table -->
        <div class="container-lg">
            <div class="table-responsive">
                <table class="table table-striped" data-click-to-select="true" data-toggle="table" data-show-columns="true" data-pagination="true" id="locations-table">
                    <thead>
                        <tr>
                            <th data-sortable="true">Nom</th>
                            <th>Adresse</th>
                            <th>Telephone</th>
                            <th>Url</th>
                            <th>Voir le lieux sur la map</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- local script -->
    <script src="./js/main.js"></script>
</body>
</html>