<form class="d-flex flex-column align-items-center justify-content-center" method="POST" action="" id="updateForm">
<div class="row w-auto">
              <div class="col">
                 <div class="form-group">
                   <label for="itemNom">Nom</label>
                   <input type="text" class="form-control text-center updateText updateInput animate__animated" name="updateNameInp" id="nomInpUpdate" aria-describedby="updateNameField" placeholder="<?=$cineUpdate["nom"]?>" value="<?=$cineUpdate["nom"]?>">
                 </div>
                 <div class="form-group">
                   <label for="itemType">Type</label>
                   <input type="text" class="form-control text-center updateText updateInput animate__animated" name="updateTypeInp" id="typeInpUpdate" aria-describedby="updateTypeField" placeholder="<?=$cineUpdate["type"]?>" value="<?=$cineUpdate["type"]?>">
                 </div>

                 <div class="form-group">
                   <label for="itemAdd">Adresse</label>
                   <input type="text" class="form-control text-center updateText updateInput animate__animated" name="updateAddInp" id="addInpUpdate" aria-describedby="updateAddField" placeholder="<?=$cineUpdate["add"]?>" value="<?=$cineUpdate["add"]?>">
                 </div>
                 <div class="form-group">
                   <label for="itemCode">Code Postal</label>
                   <input type="text" class="form-control text-center updateFloat updateInput animate__animated" name="updateCodeInp" id="codeInpUpdate" aria-describedby="updateCodeField" placeholder="<?=$cineUpdate["code"]?>" value="<?=$cineUpdate["code"]?>">
                 </div>
              </div>
              <div class="col">
                 <div class="form-group">
                   <label for="itemVille">Ville</label>
                   <input type="text" class="form-control text-center updateText updateInput animate__animated" name="updateVilleInp" id="villeInpUpdate" aria-describedby="updateVilleField" placeholder="<?=$cineUpdate["ville"]?>" value="<?=$cineUpdate["ville"]?>">
                 </div>

                 <div class="form-group">
                   <label for="itemUrl">URL</label>
                   <input type="text" class="form-control text-center updateText updateInput animate__animated" name="updateUrlInp" id="urlInpUpdate" aria-describedby="updateUrlField" placeholder="<?=$cineUpdate["url"]?>" value="<?=$cineUpdate["url"]?>">
                 </div>

                 <div class="form-group">
                   <label for="itemLat">Latitude</label>
                   <input type="text" class="form-control text-center updateFloat updateInput animate__animated" name="updateLatInp" id="latInpUpdate" aria-describedby="updateLatField" placeholder="<?=$cineUpdate["lat"]?>" value="<?=$cineUpdate["lat"]?>">
                 </div>
                 <div class="form-group">
                   <label for="itemLon">Longitude</label>
                   <input type="text" class="form-control text-center updateFloat updateInput animate__animated" name="updateLonInp" id="lonInpUpdate" aria-describedby="updateLonField" placeholder="<?=$cineUpdate["lon"]?>" value="<?=$cineUpdate["lon"]?>">
                 </div>
                </div>
                 <div class="form-group text-center">
                 <button type="submit" class="btn btn-dark rounded-pill mt-3" id="updateButton">Changer</button> 
                 <badge class="btn btn-dark rounded-pill mt-3"><a href="./">Annuler</a></badge> 
                 </div>
                 <p class="h3 text-center text-warning" id="insertError"></p>
              </div>
            </form>