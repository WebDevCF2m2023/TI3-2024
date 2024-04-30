
<div class="container-fluid my-3 border border-secondary rounded-3 pt-3">
    <div class="container-fluid">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped animate__animated animate__zoomIn" data-toggle="table" data-show-columns="false" data-search="false" data-pagination="true" data-checkbox-header="false">
                            <!-- J'ai ajouté l'animation ici car sinon, BS fait un bizarre effet -->
                        <thead>
                                <tr>
                                    <th class="text-center"  data-sortable="true">Id</th>
                                    <th class="text-center"  data-sortable="true">Nom</th>
                                    <th class="text-center"  data-sortable="true">Type</th>
                                    <th class="text-center"  data-sortable="true">Adresse</th>
                                    <th class="text-center"  data-sortable="true">Code Postal</th>
                                    <th class="text-center"  data-sortable="true">Ville</th>
                                    <th class="text-center"  data-sortable="true">Latitude</th>
                                    <th class="text-center"  data-sortable="true">Longitude</th>
                                    <th class="text-center"  data-sortable="false">URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($getMaps as $map) {
                                        
                                        ?>
                                    <tr>
                                        <td><?=$map["id"]?></td>
                                        <td><?=$map["nom"]?></td>
                                        <td><?=$map["type"]?></td>
                                        <td><?=$map["adresse"]?></td>
                                        <td><?=$map["codepostal"]?></td>
                                        <td><?=$map["ville"]?></td>
                                        <td><?=$map["latitude"]?></td>
                                        <td><?=$map["longitude"]?></td>
                                        <td><?=$map["url"]?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </tbody>
                            <div class="container mt-5">
        
        <li class="nav-item dropdown list-unstyled d-flex">
        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Trier par :
          </button>
                  <ul class="dropdown-menu bg-warning-subtle" aria-labelledby="navbarDropdown">
                    <li><a href="?page=showmap&sort=cinéma" class="dropdown-item">Cinéma</a></li>
                    <li><a href="?page=showmap&sort=ciné-club" class="dropdown-item">Ciné Club</a></li>
                    <li><a href="?page=showmap&sort=centre culturel" class="dropdown-item">Centre Culturel</a></li>
                    <li><a href="?page=showmap" class="dropdown-item">Tout</a></li>
                  </ul>
                </li>
        
        
        </div>
                        </table>
                    </div>

</div>
   
</div>



