
<div class="container-fluid my-3 border border-secondary rounded-3 pt-3">
    <div class="text-center">
    <div class="container-fluid">
                <div class="row">
                    <div class="col">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped animate__animated animate__zoomIn" data-toggle="table" data-show-columns="true" data-search="true"data-pagination="true" data-checkbox-header="true">
                            <!-- J'ai ajouté l'animation ici car sinon, BS fait un bizarre effet -->
                        <thead>
                                <tr>
                                    <th data-checkbox="true" data-click-to-select="true">Id</th>
                                    <th class="text-center"  data-sortable="true">Nom</th>
                                    <th class="text-center"  data-sortable="true">Type</th>
                                    <th class="text-center"  data-sortable="true">Adresse</th>
                                    <th class="text-center"  data-sortable="true">Code Postal</th>
                                    <th class="text-center"  data-sortable="true">Ville</th>
                                    <th class="text-center"  data-sortable="true">Latitude</th>
                                    <th class="text-center"  data-sortable="true">Longitude</th>
                                    <th class="text-center"  data-sortable="false">URL</th>

                                    <th class="text-center">Modifier</th>
                                    <th class="text-center">Supprimer</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($allLocals as $loc) {
                                        
                                        ?>
                                    <tr>
                                        <td><?=$loc["id"]?></td>
                                        <td><?=$loc["nom"]?></td>
                                        <td><?=$loc["type"]?></td>
                                        <td><?=$loc["adresse"]?></td>
                                        <td><?=$loc["codepostal"]?></td>
                                        <td><?=$loc["ville"]?></td>
                                        <td><?=$loc["latitude"]?></td>
                                        <td><?=$loc["longitude"]?></td>
                                        <td><?=$loc["url"]?></td>
                                        <td><a href="?page=adminHome&action=update&item=<?=$loc["id"]?>"><img src="img/pencil.svg" alt="update"></a></td>
                                        <td><a href="?page=adminHome&action=delete&item=<?=$loc["id"]?>"><img src="img/trash.svg" alt="delete"></a></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
</div>
    </div>
</div>



