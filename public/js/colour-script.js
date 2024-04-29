// Encore une première... Séparer les fonctions JS en fichiers individuels.
// Celui-ci s'occupe du changeur de couleurs que j'ai ajouté pour André

const body      = document.querySelector("body");
const getColour = document.querySelectorAll(".dropdown-item");
const listItem  = document.querySelectorAll(".list-group-item");


for (let i = 0; i < getColour.length; i++) {   
    getColour[i].addEventListener("click", changeColour);
}

function changeColour() {
    body.className = "";    
    const colourPick = this.id
        body.classList.add(colourPick);
    
    sessionStorage.setItem("colour", colourPick);
        applyColour();
}

function applyColour () {
    let colourPick = sessionStorage.getItem("colour");

    body.className = "";  
    body.classList.add(colourPick);
    }

applyColour();

 