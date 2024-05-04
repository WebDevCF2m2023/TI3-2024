
const updateForm    = document.getElementById("updateForm");
const updateFloat   = document.querySelectorAll(".updateFloat");
const updateButton  = document.getElementById("updateButton");
const updateError   = document.getElementById('updateError');

updateForm.addEventListener("submit", function (form) {
    form.preventDefault();
});

updateButton.addEventListener ("click", validateInputsForUpdate);

for (let i = 0; i < updateFloat.length; i++) {
    updateFloat[i].addEventListener("input", checkFloatOnInput);
}

function checkFloatOnInput() {
    let floatTest = this.value;
    /[a-z]/.test(floatTest) || /[A-Z]/.test(floatTest) || /[!@#$%^"/=:?<>&,;*()_+]/.test(floatTest) ?
        inputError(this) :
        undefined; // Je devrais probablement utiliser une déclaration if ici pour plus de clarté, mais passer undefined fonctionne
}

function inputError (err) {
    console.log(err.id);
    console.log(err.value);

    // Sélection d'une animation aléatoire en cas d'erreur
    thisAnimation = Math.floor(Math.random() * 4 + 1)
        switch (thisAnimation) {    
            case 1 :
            thisAnimation = "animate__headShake";
                break;
            case 2 :
            thisAnimation = "animate__wobble";
                break;
            case 3 :
            thisAnimation = "animate__flash";                
                break
            case 4 :
            thisAnimation = "animate__bounce";
                break;
        }
        // Animez et colorez la bordure
    let showError = document.getElementById(err.id);
    showError.style.borderColor = "red";
    showError.style.borderWidth = "3px";
    showError.classList.add(thisAnimation);

        // et réinitialisez le champ une fois l'animation terminée (permettant d'autres animations, si nécessaire)
    setTimeout(() => {
        showError.classList.remove(thisAnimation);
    }, 500);
    setTimeout(() => {
        showError.style.borderColor = "";
        showError.style.borderWidth = "";
    }, 1500);
}


        // Un dernier test de toutes les entrées.
function validateInputsForUpdate () {
    let checkInputCount = 0;
    const updateText = document.querySelectorAll(".updateText");
        for (let i = 0; i < updateText.length; i++) {
            !updateText[i].value ? inputError(updateText[i]) : checkInputCount++;
        }
        for (let i = 0; i < updateFloat.length; i++) {
            /[a-z]/.test(updateFloat[i].value) || /[A-Z]/.test(updateFloat[i].value) || /[!@#$%^"/=:?<>&,;*()_+]/.test(updateFloat[i].value) ?
            inputError(updateFloat[i]) :
            /[0-9]/.test(updateFloat[i].value) ?
            checkInputCount++ :
            inputError(updateFloat[i]);
        }
            console.log(checkInputCount);
        if (checkInputCount === 8) {
                // Tout est bon, soumettez le formulaire.
            updateForm.submit();
        }
    }
