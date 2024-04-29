// Voici les contrôles pour l'insertion
// Les fonctions pour l'insertion et la mise à jour sont presque identiques. Je devrais trouver comment les combiner, mais ce sera pour demain
// Il y a quelques jours, André a aligné tous les "="
// C'est génial. Le code est beaucoup plus clair

if (document.getElementById("insertForm")) {
const insertForm    = document.getElementById("insertForm"),
      nomInp        = document.getElementById("nomInp"),
      typeInp       = document.getElementById("typeInp"),
      addInp       = document.getElementById("addInp"),
      codeInp       = document.getElementById("codeInp"),
      villeInp       = document.getElementById("villeInp"),
      urlInp       = document.getElementById("urlInp"),
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
        
        (nom == "" || type == "" || add == "" || code == "" || ville == "" || url == "" || lat == "" || lon == "") || (isNaN(code)) || (isNaN(lat) || isNaN(lon)) ?
        insertError.textContent = "Remplissez correctement les champs" :
        insertForm.submit();   
    }
    
}  

 
if (document.getElementById("updateForm")) {
    const updateForm    = document.getElementById("insertFormUpdate"),
    nomInp        = document.getElementById("nomInpUpdate"),
    typeInp       = document.getElementById("typeInpUpdate"),
    addInp       = document.getElementById("addInpUpdate"),
    codeInp       = document.getElementById("codeInpUpdate"),
    villeInp       = document.getElementById("villeInpUpdate"),
    urlInp       = document.getElementById("urlInpUpdate"),
    latInp        = document.getElementById("latInpUpdate"),
    lonInp        = document.getElementById("lonInpUpdate"),
    insertError   = document.getElementById("insertErrorUpdate");
    

updateForm.addEventListener("submit", function(event) {
    event.preventDefault();
        validateInputs();
});

function validateInputsForUpdate () {
    insertError.textContent = "";
    let nom  = nomInp.value;
    let type = typeInp.value;
    let add = addInp.value;
    let code = codeInp .value;
    let ville = villeInp .value;
    let url = urlInp .value;
    let lat  = latInp.value;
    let lon  = lonInp.value;
    
    (nom == "" || type == "" || add == "" || code == "" || ville == "" || url == "" || lat == "" || lon == "") || (isNaN(code)) || (isNaN(lat) || isNaN(lon)) ?
    insertError.textContent = "Remplissez correctement les champs" :
    updateForm.submit();   
}
}