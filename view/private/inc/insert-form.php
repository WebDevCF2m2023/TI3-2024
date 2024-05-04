<form class="d-flex flex-column align-items-center justify-content-center" method="POST" action="" id="insertForm">
    <div class="row w-auto">
              <div class="col">
                 <div class="form-group">
                   <label for="itemName">Nom</label>
                   <input type="text" class="form-control text-center insertText insertInput animate__animated" name="itemNameInp" id="nomInp" aria-describedby="itemNameField" placeholder="Nom">
                 </div>
                 <div class="form-group">
                   <label for="itemType">Type</label>
                   <input type="text" class="form-control text-center insertText insertInput animate__animated" name="itemTypeInp" id="typeInp" aria-describedby="itemTypeField" placeholder="Type">
                 </div>
                 <div class="form-group">
                   <label for="itemAdd">Adresse</label>
                   <input type="text" class="form-control text-center insertText insertInput animate__animated" name="itemAddInp" id="addInp" aria-describedby="itemAddField" placeholder="Adresse">
                 </div>
                 <div class="form-group">
                   <label for="itemCode">Code Postal</label>
                   <input type="text" class="form-control text-center insertFloat insertInput animate__animated" name="itemCodeInp" id="codeInp" aria-describedby="itemCodeField" placeholder="Code Postal">
                 </div>
              </div>
                 <div class="col">
                 <div class="form-group">
                   <label for="itemVille">Ville</label>
                   <input type="text" class="form-control text-center insertText insertInput animate__animated" name="itemVilleInp" id="villeInp" aria-describedby="itemVilleField" placeholder="Type">
                 </div>
                 <div class="form-group">
                   <label for="itemUrl">URL</label>
                   <input type="text" class="form-control text-center insertText insertInput animate__animated" name="itemUrlInp" id="urlInp" aria-describedby="itemUrlField" placeholder="URL">
                 </div>
                 <div class="form-group">
                   <label for="itemLat">Latitude</label>
                   <input type="text" class="form-control text-center insertFloat insertInput animate__animated" name="itemLatInp" id="latInp" aria-describedby="itemLatField" placeholder="Latitude">
                 </div>
                 <div class="form-group">
                   <label for="itemLon">Longitude</label>
                   <input type="text" class="form-control text-center insertFloat insertInput animate__animated" name="itemLonInp" id="lonInp" aria-describedby="itemLonField" placeholder="Longitude">
                 </div>
                </div>
                <div class="form-group text-center">
                <button type="submit" class="btn btn-dark rounded-pill mt-3" id="insertButton">Ajouter</button> 
                </div>
                </form>
                <p class="h3 text-center text-warning" id="insertError"></p>
            </div>