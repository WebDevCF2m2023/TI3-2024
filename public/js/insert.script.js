// Ça peut sembler fou, mais je suis vraiment en train d'écrire tout cela à partir de zéro. 
// Copier/coller est utile, mais taper ces choses de manière répétée peut aussi être bénéfique.

// La preuve ? En retapant tous les getElementById nécessaires, j'ai pensé à une manière bien meilleure de le faire.

const insertForm    = document.getElementById("insertForm");
const insertFloat   = document.querySelectorAll(".insertFloat");
const insertButton  = document.getElementById("insertButton");
const insertError   = document.getElementById('insertError');

insertForm.addEventListener("submit", function (form) {
    form.preventDefault();
});

insertButton.addEventListener ("click", validateInputsForInsert);

for (let i = 0; i < insertFloat.length; i++) {
    insertFloat[i].addEventListener("input", checkFloatOnInput);
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
function validateInputsForInsert () {
    let checkInputCount = 0;
    const insertText = document.querySelectorAll(".insertText");
        for (let i = 0; i < insertText.length; i++) {
            !insertText[i].value ? inputError(insertText[i]) : checkInputCount++;
        }
        for (let i = 0; i < insertFloat.length; i++) {
            /[a-z]/.test(insertFloat[i].value) || /[A-Z]/.test(insertFloat[i].value) || /[!@#$%^"/=:?<>&,;*()_+]/.test(insertFloat[i].value) ?
            inputError(insertFloat[i]) :
            /[0-9]/.test(insertFloat[i].value) ?
            checkInputCount++ :
            inputError(insertFloat[i]);
        }
            console.log(checkInputCount);
        if (checkInputCount === 8) {
                // Tout est bon, soumettez le formulaire.
                console.log("ALL GOOD");                    
                    insertForm.submit();
 
        }
    }
