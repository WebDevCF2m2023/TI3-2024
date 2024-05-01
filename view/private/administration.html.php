<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Administration</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4 bg-dark sticky-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">TI3_2024</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./?administration">Panel administration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?disconnect">Se deconnecter</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDelete" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteID">Validation de suppression</h5>
                </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="onCancelDelete(event)">Annuler</button>
                <button type="button" class="btn btn-danger validDelete" onclick="onValideDelete(event)">Supprimer</button>
            </div>
            </div>
        </div>
    </div>

    <div class="container">
        <header class="bg-dark my-4" style="height: 250px">
            <h1 class="text-light text-center" style="line-height: 250px">Administration</h1>
        </header>
        <?php if(isset($_GET['updateOK'])) : ?>
            <h2 class="text-center mb-4 text-success">La localisation avec comme ID <strong class="text-primary"><?=$_GET['updateOK']?></strong> a bien été modifié.</h2>
        <?php endif ?>
        <?php if(isset($_GET['deleteOK'])) : ?>
            <h2 class="text-center mb-4 text-success">La localisation avec comme ID <strong class="text-primary"><?=$_GET['deleteOK']?></strong> a bien été <strong class="text-danger">supprimé</strong>.</h2>
        <?php endif ?>
        <?php if(isset($_GET['deleteKO'])) : ?>
            <h2 class="text-center mb-4 text-success">La localisation avec comme ID <strong class="text-primary"><?=$_GET['deleteKO']?></strong> <strong class="text-danger">n'a pas</strong> été supprimé.</h2>
        <?php endif ?>
        <?php if(isset($_GET['addOK'])) : ?>
            <h2 class="text-center mb-4 text-success">La localisation avec comme ID <strong class="text-primary"><?=$_GET['addOK']?></strong> a bien été crée.</h2>
        <?php endif ?>
        <?php if(is_string($locations)) : ?>
            <h2 class="text-danger text-center"><?= $locations ?></h2>
        <?php else: ?>
            <div id="toolbar" style="min-width: 350px;">
                <button id="remove" class="btn btn-danger bi bi-trash" disabled>
                    Supprimer
                </button>
                <button id="add" class="btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-fill-add" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1"/>
                        <path d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7m6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.55 4.55 0 0 1 .23-2.002m-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-1.3-1.905"/>
                    </svg> Ajouter
                </button>
                <select onchange="selectMode(event)" class="select-api-mode form-select d-inline-block position-relative" style="max-width: 150px;top:2px;">
                    <option value="1" selected>API Mode</option>
                    <option value="2">Standart Mode</option>
                </select>
            </div>
            <table 
                id="table"
                class="table table-striped"
                data-toggle="table"
                data-toolbar="#toolbar"
                data-show-export="true"
                data-pagination="true"
                data-page-list="[7,14,21]"
                data-page-size="7"
                data-minimum-count-columns="2"
                data-show-columns="true"
                data-show-columns-toggle-all="true"
                data-url="?json"
                data-side-pagination="server"
                >
                <thead>
                    <tr>
                        <th data-checkbox="true" data-field="state"></th>
                        <th data-field="id">ID</th>
                        <th data-field="nom" class="thmin">Nom</th>
                        <th data-field="type" class="thmin">Type</th>
                        <th data-field="adresse" class="thmin">Adresse</th>
                        <th data-field="codepostal" class="thmin">Code Postal</th>
                        <th data-field="ville" class="thmin">Ville</th>
                        <th data-field="url" class="thmin">URL</th>
                        <th data-field="latitude" class="thmin lat">Latitude</th>
                        <th data-field="longitude" class="thmin long">Longitude</th>
                        <th data-formatter="formatBaseActions" data-field="actions" data-events="operateEvents">Actions</th>
                    </tr>
                </thead>
            </table>
        <?php endif ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.28.0/tableExport.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/bootstrap-table-locale-all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/extensions/export/bootstrap-table-export.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>
    <script src="js/table.js"></script>
    <div class="position-fixed w-25 bottom-0 end-0 me-2 mb-2" style="height: 50px">

    </div>
   </body>
</html>