<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Administration</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4 bg-dark sticky-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">TI3_2024</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./">Accueil</a>
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
                <button id="remove" class="btn btn-danger" disabled>
                    <i class="bi bi-trash"></i> Supprimer
                </button>
                <button id="add" class="btn btn-success">
                    <i class="bi bi-database-fill-add"></i> Ajouter
                </button>
                <select onchange="selectMode(event)" class="select-api-mode form-select d-inline-block position-relative" style="max-width: 150px;top:2px;">
                    <option value="1" selected>API Mode</option>
                    <option value="2">Standard Mode</option>
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
                data-unique-id="id"
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
    <script src="js/bootstrap-table.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/bootstrap-table-locale-all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/extensions/export/bootstrap-table-export.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>
    <script>
        // Injection PHP
        const TYPES_CATEGORIES = <?= json_encode(TYPES_CATEGORIES) ?>;
    </script>
    <script src="js/table.js"></script>
   </body>
</html>