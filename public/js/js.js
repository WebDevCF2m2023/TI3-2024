const map = L.map('map').setView([50.8504500, 4.3487800], 15);
const markers = {};
 
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
 
// Récupération des données
fetch("?json")
    .then(response => response.json())
    .then(handleResponse)
    .catch(error => console.log("error", error));
 
// Gestion des données reçues
function handleResponse(locations) {
    if (locations.error !== undefined) {
        alert(locations.error);
        return;
    }
    addAllMarkersByLocations(locations);
    addAllToListe(locations);
}
 
// Ajout des marqueurs sur la carte
function addAllMarkersByLocations(locations) {
    locations.forEach(information => {
        const marker = L.marker([information.latitude, information.longitude]).addTo(map);
        markers[information.id] = marker;
        marker.bindPopup(`<b><p>${information.nom}</b></p>${information.adresse}<br> ${information.codepostal} ${information.ville}</p>`);
    });
}
 
// Ajout des éléments à la liste
function addAllToListe(locations) {
    const liste = document.getElementById("liste");
    const ul = document.createElement('ul');
 
    locations.forEach(i => {
        const li = document.createElement('li');
        li.innerHTML = `<b><code>&bull; </code>${i.nom} </b>| ${i.adresse}, ${i.codepostal}, ${i.ville} `;
        li.dataset.id = i.id;
        ul.appendChild(li);
    });
 
    ul.addEventListener("click", onClickLI);
    liste.appendChild(ul);
}
 
// Gestion des clics sur les éléments de la liste
function onClickLI(e) {
    const li = e.target;
    if (li.nodeName !== "LI") return;
    const marker = markers[li.dataset.id];
    const latlng = marker.getLatLng();
    map.flyTo([latlng.lat, latlng.lng], 16);
}