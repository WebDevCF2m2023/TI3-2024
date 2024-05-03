// Ça peut sembler fou, mais je suis vraiment en train d'écrire tout cela à partir de zéro. 
// Copier/coller est utile, mais taper ces choses de manière répétée peut aussi être bénéfique.

const insertForm    = document.getElementById("insertForm");
const insertFloat    = document.querySelectorAll(".insertFloat");
console.log(insertFloat.length);


insertForm.addEventListener("submit", function (form) {
    form.preventDefault();
    validateInputsForInsert();
});



for (let i = 0; i < insertFloat.length; i++) {
    insertFloat[i].addEventListener("input", checkFloatOnInput);
}

function checkFloatOnInput() {
    let floatTest = this.value;
    /[a-z]/.test(floatTest) || /[A-Z]/.test(floatTest) || /[!@#$%^"/=:?<>&,;*()_+]/.test(floatTest) ?
        console.log ('YAH BABY') :
        console.log ("NON");
}
