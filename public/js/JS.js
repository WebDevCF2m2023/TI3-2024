/* Définition du centre et du zoom de la carte (valeur initiale)  */
const carte = L.map('map').setView([51.505, -0.09], 16);

/* Ajout d'un fond de carte (arrière-plan) */
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(carte);

/* Ajout d'une liste de points à placer sur la carte */
const liste = {
    "Studios Abbey Road": {"lat":51.531988,"lng":-0.178226},
    "Palais de Buckingham": {"lat":51.500835,"lng":-0.143004},
    "Trafalgar Square": {"lat":51.508037,"lng":-0.128049},
    "British Museum": {"lat":51.519294,"lng":-0.128018}
};

/* Création d'un clusterGroup */
const markers= L.markerClusterGroup();

/* Création d'un tableau de marqueurs pour un affichage optimal avec FeatureGroup */
const markerTable = [];

/* Boucle pour créer les marqueurs de la liste */
for (let item in liste){
    /* créer un marqueur pour chaque élément de la liste */
    let unMarqueur = L.marker([liste[item].lat, liste[item].lng]).addTo(carte);
    /* mettre le nom de l'item dans un popup */
    unMarqueur.bindPopup(item);
    /* ajouter ce marqueur au groupe */
    markers.addLayer(unMarqueur);

    /* ajouter ce marqueur au tableau */
    markerTable.push(unMarqueur);
}

/* ajouter le groupe à la carte */
carte.addLayer(markers);

/* placer le tableau de marqueuts dans le featureGroup */
const groupe = new L.featureGroup(markerTable);

/* adapter l'affichage de ma carte en fonction de la position des marqueurs */
carte.fitBounds(groupe.getBounds(),{padding:[10,10]});