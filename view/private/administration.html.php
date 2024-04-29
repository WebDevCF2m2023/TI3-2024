<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
    <title>Administration</title>

    <style>
        .icon-link-update:hover .icon-update {
            fill: green;
        }

        .icon-link-delete:hover .icon-delete {
            fill: red;
        }


        /* A litle css, sorry magib */
    </style>
</head>

<body>


    <div class="container">
        <?php if (isset($_GET['updateOK'])): ?>
            <h2 class="text-center mb-4 text-success">La location avec comme ID <strong
                    class="text-primary"><?= $_GET['updateOK'] ?></strong> a bien été modifié.</h2>
        <?php endif ?>
        <?php if (isset($_GET['deleteOK'])): ?>
            <h2 class="text-center mb-4 text-success">La location avec comme ID <strong
                    class="text-primary"><?= $_GET['deleteOK'] ?></strong> a bien été <strong
                    class="text-danger">supprimé</strong>.</h2>
        <?php endif ?>
        <?php if (isset($_GET['deleteKO'])): ?>
            <h2 class="text-center mb-4 text-success">La location avec comme ID <strong
                    class="text-primary"><?= $_GET['deleteKO'] ?></strong> <strong class="text-danger">n'a pas</strong> été
                supprimé.</h2>
        <?php endif ?>
        <?php if (isset($_GET['addOK'])): ?>
            <h2 class="text-center mb-4 text-success">La location avec comme ID <strong
                    class="text-primary"><?= $_GET['addOK'] ?></strong> a bien été crée.</h2>
        <?php endif ?>
        <?php if (is_string($locations)): ?>
            <h2 class="text-danger text-center"><?= $locations ?></h2>
        <?php else: ?>
            <div id="toolbar">
                <a href="?addLocation">
                    <button type="button" class="btn btn-success">
                        <svg style="position:relative; top: -1px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-database-fill-add me-1" viewBox="0 0 16 16">
                            <path
                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1">
                            </path>
                            <path
                                d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7m6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.55 4.55 0 0 1 .23-2.002m-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-1.3-1.905">
                            </path>
                        </svg>
                        Ajouter Location
                    </button>
                </a>
                <a href="/?">
                    <button type="button" class="btn btn-warning ">Page d'accueil</button>
                </a>
                <a href="/?disconnect">
                    <button type="button" class="btn btn-danger">Deconexion</button>
                </a>
            </div>
            <table class="table table-hover table-bordered" 
                data-toggle="table"
                data-toolbar="#toolbar"
                data-show-export="true"
                data-pagination="true"
                data-page-list="[2, 4, 6, 8, 12, all]"
                data-page-size="6"
                data-minimum-count-columns="2"
                data-show-columns="true"
                data-show-columns-toggle-all="true"
                data-search="true"
                >
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col ">Nom</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Code Postal</th>
                        <th scope="col">Ville</th>
                        <th scope="col">nb_velos</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($locations as $location): ?>
                        <tr class="text-center">
                            <th scope="row "><?= $location['id'] ?></th>
                            <td><?= $location['nom'] ?></td>
                            <td><?= $location['adresse'] ?></td>
                            <td><?= $location['codepostal'] ?></td>
                            <td><?= $location['ville'] ?></td>
                            <td><?= $location['nb_velos'] ?></td>
                            <td><?= $location['latitude'] ?></td>
                            <td><?= $location['longitude'] ?></td>
                            <td class="ps-4">
                                <a href="?update=<?= $location['id'] ?>" class="icon-link-update">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill=""
                                        class="bi bi-pencil-square icon-update" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                    </svg>
                                </a>
                            </td>
                            <td class="ps-4">
                                <a href="?delete=<?= $location['id'] ?>" class="icon-link-delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill=""
                                        class="bi bi-x-octagon icon-delete" viewBox="0 0 16 16">
                                        <path
                                            d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1z" />
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php endif ?>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.28.0/tableExport.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/bootstrap-table-locale-all.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/extensions/export/bootstrap-table-export.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>
</body>

</html>