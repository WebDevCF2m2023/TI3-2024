let canCheckOnInput = false;
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            if (!checkCorrectURL(true)) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated');
        }, false)
        if(form.classList.contains('was-validated')) canCheckOnInput = true;
        })
})();

function checkCorrectURL(submited){
    if(submited === true){
        canCheckOnInput = true;
    }
    if(!canCheckOnInput) return;
    const url = document.getElementById("url");
    const checkUrl = document.querySelector(".checkUrl");
    if(/^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,190}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()!@:%_\+.~#?&\/\/=]*)/.test(url.value.trim())){
        url.classList.remove('customInvalid', 'is-invalid');
        url.classList.add('is-valid');
        checkUrl.textContent = "Le lien du site ne doit pas être vide ou dépasser 200 caractères";
        return true;
    }
    url.classList.remove('is-valid');
    url.classList.add('is-invalid', 'customInvalid');
    if(url.value.trim().length > 200)
        checkUrl.textContent = "Le lien du site ne doit pas être vide ou dépasser 200 caractères";
    else
        checkUrl.textContent = "Format de l'url incorrect";
    return false;
}