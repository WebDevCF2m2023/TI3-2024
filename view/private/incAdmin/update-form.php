<div class="row w-auto">
              <div class="col">
            <form class="d-flex flex-row flex-wrap justify-content-evenly" method="POST" action="" id="updateForm">
                 <div class="form-group">
                   <label for="itemNom">Nom</label>
                   <input type="text" class="form-control text-center" name="updateNameInp" id="nomInpUpdate" aria-describedby="updateNameField" placeholder="<?=$updateItem["nom"]?>" value="<?=$updateItem["nom"]?>" required>
                 </div>
                 <div class="form-group">
                   <label for="itemDesc">Type</label>
                   <input type="text" class="form-control text-center" name="updateTypeInp" id="typeInpUpdate" aria-describedby="updateTypeField" placeholder="<?=$updateItem["type"]?>" value="<?=$updateItem["type"]?>" required>
                 </div>
                 <div class="form-group">
                   <label for="itemLon">Adresse</label>
                  <input type="text" class="form-control text-center" name="updateAddInp" id="addInpUpdate" aria-describedby="updateAddField" placeholder="<?=$updateItem["adresse"]?>" value="<?=$updateItem["adresse"]?>" required>
                 </div>
                 <div class="form-group">
                   <label for="itemLon">Code Postal</label>
                  <input type="text" class="form-control text-center" name="updateCodeInp" id="codeInpUpdate" aria-describedby="updateCodeField" placeholder="<?=$updateItem["codepostal"]?>" value="<?=$updateItem["codepostal"]?>" required>
                 </div>
                 <div class="form-group">
                   <label for="itemLon">Ville</label>
                  <input type="text" class="form-control text-center" name="updateVilleInp" id="villeInpUpdate" aria-describedby="updateVilleField" placeholder="<?=$updateItem["ville"]?>" value="<?=$updateItem["ville"]?>" required>
                 </div>
                 <div class="form-group">
                   <label for="itemLon">URL</label>
                  <input type="text" class="form-control text-center" name="updateURLInp" id="urlInpUpdate" aria-describedby="updateURLField" placeholder="<?=$updateItem["url"]?>" value="<?=$updateItem["url"]?>" required>
                 </div>
                 <div class="form-group">
                   <label for="itemLat">Latitude</label>
                   <input type="text" class="form-control text-center" name="updateLatInp" id="latInpUpdate" aria-describedby="updateLatField" placeholder="<?=$updateItem["latitude"]?>" value="<?=$updateItem["latitude"]?>" required>
                 </div>
                 <div class="form-group">
                   <label for="itemLon">Longitude</label>
                   <input type="text" class="form-control text-center" name="updateLonInp" id="lonInpUpdate" aria-describedby="updateLonField" placeholder="<?=$updateItem["longitude"]?>" value="<?=$updateItem["longitude"]?>" required>
                 </div>
                 <div class="form-group">
                 <button type="submit" class="btn btn-dark rounded-pill mt-3" id="sayBye">Changer</button> 
                 <badge class="btn btn-dark rounded-pill mt-3"><a href="?page=adminHome">Annuler</a></badge> 
                 </div>
                </form>
                <p class="h3 text-center text-warning" id="insertError"></p>
                </div>
            </div>