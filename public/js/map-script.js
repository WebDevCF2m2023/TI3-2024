/* Définition du centre et du zoom de la carte (valeur initiale)  */
const map = L.map('map').setView([50.825, 4.338], 18);

/* Ajout d'un fond de carte (arrière-plan) */
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

/* Récupération des données */


fetch("?json")
.then(function(response){
    response.json().then(function(data){
        console.log(data);
       afficheMarqueurs(data);
        afficheListe(data);
    });

    })
    .catch(function(error){
        console.log(error.message);
    });
    

/* Création d'un tableau de marqueurs pour un affichage optimal avec FeatureGroup */
const markerTable = [];

function afficheMarqueurs(liste){
    /* Boucle pour créer les marqueurs de la liste */
    for (let item in liste){
        /* créer un marqueur pour chaque élément de la liste */
        let unMarqueur = L.marker([liste[item].latitude, liste[item].longitude]).addTo(map);
        /* mettre le nom de l'item dans un popup */
        unMarqueur.bindPopup(`<span class = "mapIcon"><h3>${liste[item].nom}</h3><a target='_blank' href='${liste[item].url}'>${liste[item].url}</a></span>`);

        /* ajouter ce marqueur au tableau */
        markerTable.push(unMarqueur);
    }

/* placer le tableau de marqueurs dans le featureGroup */
const groupe = new L.featureGroup(markerTable);

/* adapter l'affichage de ma carte en fonction de la position des marqueurs */
map.fitBounds(groupe.getBounds(),{padding:[10,10]});
}

function afficheListe(liste){
    const divliste = document.getElementById("liste");

    const UL = document.createElement("ul");

    liste.forEach(function(item){
        // créer l'élément de type <li>
        let LI = document.createElement("li");
        // remplir le <li>
        LI.innerHTML = `<span class = "listIcon"><span class="flyMarker">${item.nom},</span><span class="flyMarker">${item.adresse},</span><span class="flyMarker">${item.codepostal},</span><span class="flyMarker">${item.ville}.</span><span class="flyMarker"><a href="${item.url}" target="_blank">Visite</a></span></span>`;
        // ajouter un eventListener sur le clic
        LI.addEventListener('click', itemClick);
        // ajouter un attribut à cet item LI pour l'identifier
        LI.setAttribute("id",`${item.id}`);
        // ajouter des attributs à cet item LI pour stocker les coordonnées
        LI.setAttribute("latitude",`${item.latitude}`);
        LI.setAttribute("longitude",`${item.longitude}`);
        // attacher ce <li> au <ul>
        UL.appendChild(LI);
    });

    // attacher la liste <ul> au DIV
    divliste.appendChild(UL);
}

function itemClick(){
    let id = this.getAttribute("id");
    let latitude = this.getAttribute("latitude");
    let longitude = this.getAttribute("longitude");

    console.log('item cliqué : ' + id);

    let marqueur = markerTable[id-1];
    marqueur.togglePopup();
    map.flyTo([latitude,longitude],17);
}