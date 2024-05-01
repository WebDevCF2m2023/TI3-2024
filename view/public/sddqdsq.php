
<div class = "listDivLarge">
            <div class="listHeadLarge">
                <h3>Liste des <?=$mapCount?> locations</h3>
                <h5>Cliquez sur un nom du Cinéma ci-dessous pour la situer sur la carte</h5>
            </div>
            <table class="normalTable">
                <tr>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Adresse</th>
                    <th>Code Postale</th>
                    <th>Ville</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Visite</th>
                </tr>
                <?php
                    foreach ($getMaps as $map) {
                ?>
                    <tr>
                        <td><a href="?page=home&lat=<?=$map["latitude"]?>&lon=<?=$map["longitude"]?>&nom=<?=$map["nom"]?>&id=<?=$map["id"]?>" class="mapLinks"><?=$map["nom"]?></a></a></td>
                        <td><?=$map["type"]?></td>
                        <td><?=$map["adresse"]?></td>
                        <td><?=$map["codepostal"]?></td>
                        <td><?=$map["ville"]?></td>
                        <td><?=$map["latitude"]?></td>
                        <td><?=$map["longitude"]?></td>
                        <td><a href="<?=$map["url"]?>" target="_blank"><img src="img/link.svg" alt=""></td>
                    </tr>
                <?php
                }            
                ?>
            </table>
        </div>


        <div class = "listDiv">
            <div class="listHead">
                <h3>Liste des <?=$mapCount?> locations</h3>
                <h5>Cliquez sur un nom du Cinéma ci-dessous pour la situer sur la carte</h5>
            </div>
            <table class = "listTable">
                <tr>
                    <th>Nom</th>
                </tr>
                <?php
                $i=0;
                    foreach ($getMaps as $map) {

                ?>
                    <tr>
                        <td><a href="?page=home&lat=<?=$map["latitude"]?>&lon=<?=$map["longitude"]?>&id=<?=$map["id"]?>" class="mapLink"><?=$map["nom"]?></a></a></td>
                    </tr>

                <?php
                }            
                ?>
            </table>
        </div>


    </div>


    <?php 
                         if (isset($_SESSION["monID"]) && $_SESSION["monID"] === session_id()) {
                            ?>
                    <div class="table-responsive">
                        <table class="table" data-toggle="table" data-show-columns="false" data-search="false" data-pagination="true">
                        <thead>
                                <tr>
                                    <th class="text-center bg-transparent">Choissisez votre destination parmi ce <?=$mapCount?> options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($getMaps as $map) {
                                        ?>
                                    <tr>
                                        <td><a href="?page=showmap&lat=<?=$map["latitude"]?>&lon=<?=$map["longitude"]?>&nom=<?=$map["nom"]?>&id=<?=$map["id"]?>&url=<?=$map["url"]?>" class="mapLink link-opacity-75 link-opacity-100-hover text-decoration-none fs-5"><?=$map["nom"]?></a></td>
                                    <?php
                                    }
                                }
                                    ?>
                                    </tr>
                            </tbody>
                        </table>
                   
                    </div>