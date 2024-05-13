const loginCall     = document.getElementById("loginCall");
const normalHead    = document.querySelector(".normalHead");
const hideLogin     = document.querySelector(".hideLogin");
const loginForm     = document.getElementById("loginForm");
const nomInp        = document.getElementById("nomInp");
const pwdInp        = document.getElementById("pwdInp");
const loginError    = document.getElementById('loginError');

loginCall.addEventListener("click", showLogin);

loginForm.addEventListener("submit", function (form) {
    form.preventDefault();
    validateInputsForLogin();
});


let buttonFlash = setInterval(() => {
        loginCall.classList.add ("tryThis");
        setTimeout(() => {
            loginCall.classList.remove("tryThis");
        }, 1500);
    }, 3000);

function showLogin () {
    loginCall.disabled = true;
    clearInterval(buttonFlash);
    normalHead.className = "";
    normalHead.classList.add('fadingHead');
    setTimeout(() => {
        hideLogin.className = "";
        hideLogin.classList.add('showLogin');
        normalHead.className = "";
        normalHead.classList.add("goneHead");
    }, 1500);
}

function validateInputsForLogin () {
    let nom  = nomInp.value;
    let pwd = pwdInp.value;

    nom === "" || pwd === "" || /[!@#$%^"/=:.?<>&,;*()_+]/.test(nom) ?
    loginError.textContent = "Remplissez les deux champs correctement" :
    loginForm.submit();
}


