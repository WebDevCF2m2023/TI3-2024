// Voici les contrôles pour l'insertion
// Les fonctions pour l'insertion et la mise à jour sont presque identiques. Je devrais trouver comment les combiner, mais ce sera pour demain
// Il y a quelques jours, André a aligné tous les "="
// C'est génial. Le code est beaucoup plus clair
/*
if (document.getElementById("insertForm")) {
const insertForm    = document.getElementById("insertForm"),
      nomInp        = document.getElementById("nomInp"),
      typeInp       = document.getElementById("typeInp"),
      addInp       = document.getElementById("addInp"),
      codeInp       = document.getElementById("codeInp"),
      villeInp       = document.getElementById("villeInp"),
      urlInp       = document.getElementById("turlInp"),
      latInp        = document.getElementById("latInp"),
      lonInp        = document.getElementById("lonInp"),
      insertError   = document.getElementById("insertError");

      
      insertForm.addEventListener("submit", function(event) {
    event.preventDefault();
        validateInputsForInsert();
    });
    
    
    function validateInputsForInsert () {
        insertError.textContent = "";
        let nom  = nomInp.value;
        let type = typeInp.value;
        let add = addInp.value;
        let code = codeInp .value;
        let ville = villeInp .value;
        let url = urlInp .value;
        let lat  = latInp.value;
        let lon  = lonInp.value;
        
        (nom == "" || type == "" || add == "" || code == "" || ville == "" || url == "" || lat == "" || lon == "") || (isNaN(lat) || isNaN(lon)) ?
        insertError.textContent = "Remplissez correctement les champs" :
        insertError.textContent = "Bien"
      //   insertForm.submit();   
    }
    
}  

 */
if (document.getElementById("updateForm")) {
const updateForm    = document.getElementById("updateForm"),
      nomInpUpdate        = document.getElementById("nomInpUpdate"),
      typeInpUpdate       = document.getElementById("typeInpUpdate"),
      latInpUpdate        = document.getElementById("latInpUpdate"),
      lonInpUpdate        = document.getElementById("lonInpUpdate");
    

updateForm.addEventListener("submit", function(event) {
    event.preventDefault();
        validateInputsForUpdate();
});

function validateInputsForUpdate () {
       insertError.textContent = ""
       
       let nom  = nomInpUpdate.value;
       let desc = typeInpUpdate.value;
       let lat  = latInpUpdate.value;
       let lon  = lonInpUpdate.value;

    (nom == "" || desc == "" || lat == "" || lon == "") || (isNaN(lat) || isNaN(lon)) ?
        insertError.textContent = "Remplissez correctement les champs" :
        updateForm.submit();   
}
}