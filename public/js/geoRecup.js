const laCarte = initMap();

function recupData() {
    const fetchOptions = { method: 'GET', mode: 'cors', cache: 'default' };

    fetch('DB.php', fetchOptions)
        .then(function(response){
            response.json().then(function(json){
                console.log(json);
                /*lireJSON(json);*/
                afficheCarte(laCarte, json);
                afficheListe(json);
            });
        })
        .catch(function(error){
            console.log('Problème avec fetch: '+error.message);
        });
}

function lireJSON(data) {
    data.forEach(function(ligne,index){
        console.log(`Nom: ${ligne.nom} et coords: ${ligne.latitude},${ligne.longitude}`);
    });
}

function afficheListe(data) {
    const liste = document.getElementById("liste");
    
    const UL = document.createElement("ul");

    data.forEach(function(ligne,index){
        let LI = document.createElement("li");
        LI.setAttribute("id",`${ligne.id}`);
        LI.setAttribute("lat",`${ligne.latitude}`);
        LI.setAttribute("lng",`${ligne.longitude}`);
        LI.innerHTML = `${ligne.nom} - ${ligne.rue} - Téléphone: ${ligne.telephone} - <a target='blank' href='${ligne.url}'>Site Web</a>`;
        LI.addEventListener('click', pop);
        UL.appendChild(LI);
    });

    liste.appendChild(UL);
}

function pop() {
    let id = this.getAttribute("id");
    let lat = this.getAttribute("lat");
    let lng = this.getAttribute("lng");
    console.log(id);
    let marqueur = markerTable[id-1];
    console.log(marqueur);
    laCarte.flyTo([lat,lng],15,{
        duration:1
    });
    marqueur.togglePopup();
}
