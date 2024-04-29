/* Création d'un tableau de marqueurs pour un affichage optimal avec FeatureGroup */
const markerTable = [];
let currentLat  = 50.825;
let currentLng  = 4.338;
let currentZoom = 10;

function initMap() {
/* Définition du centre et du zoom de la carte (valeur initiale)  */
const initLat  = currentLat;
const initLng  = currentLng;
const initZoom = currentZoom;

const carte = L.map('carte').setView([initLat, initLng], initZoom);

/* Ajout d'un fond de carte (arrière-plan) */
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(carte);

return carte;
}

function afficheCarte(carte, liste) {
    /* Création d'un clusterGroup */
    const markers= L.markerClusterGroup({
        showCoverageOnHover: false,
        removeOutsideVisibleBounds: false
    });

    /* Boucle pour créer les marqueurs de la liste */
    for (let item in liste){
        /* créer un marqueur pour chaque élément de la liste */
        let unMarqueur = L.marker([liste[item].latitude, liste[item].longitude]).addTo(carte);
        /* mettre le nom de l'item dans un popup */
        unMarqueur.bindPopup(liste[item].nom);

        /* ajouter ce marqueur au groupe */
        /*markers.addLayer(unMarqueur);*/

        /* ajouter ce marqueur au tableau */
       markerTable.push(unMarqueur);
    }

    /* ajouter le groupe à la carte */
    /*carte.addLayer(markers);*/

    /* placer le tableau de marqueurs dans le featureGroup */
    const groupe = new L.featureGroup(markerTable);

    /* adapter l'affichage de ma carte en fonction de la position des marqueurs */
    carte.fitBounds(groupe.getBounds(),{padding:[10,10]});

    /* quels sont les nouveaux centre et zoom pour afficher ce groupe ? */
    console.log(currentZoom);
    currentZoom = carte.getBoundsZoom(groupe.getBounds());
    console.log(groupe.getBounds().getCenter());
    currentLat = groupe.getBounds().getCenter().lat;
    currentLng = groupe.getBounds().getCenter().lng;
}

function resetMap() {
    laCarte.setView([currentLat, currentLng], currentZoom);
}
