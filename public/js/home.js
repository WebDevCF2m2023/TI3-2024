const map = L.map('map').setView([50.845347, 4.350323], 13);
const markers = {};
const featureGroup = L.featureGroup();
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


fetch("?json")
    .then(response=>response.json())
    .then(handleResponse)
    .catch(error=>alert(error));

/**
 * 
 * @param {object[]} locations
 */
function handleResponse(locations){
    if(locations.error !== undefined){
        alert(locations.error);
        return;
    }
    addAllMarkersByLocations(locations);
    addAllToListe(locations);
}

/**
 * 
 * @param {object[]} locations
 */
function addAllToListe(locations){

    const liste = document.getElementById("liste");
    const ul = document.createElement('ul');

    if(locations.length === 0){
        const p = document.createElement('p');
        p.textContent = "Pas encore de lieux";
        liste.appendChild(p);
        return;
    }

    locations.forEach(i => {
        
        const li = document.createElement('li');

        li.innerHTML = `${i.nom} - ${i.type} | Adresse : ${i.adresse} - ${i.codepostal} - ${i.ville} | <a href="${i.url}" target="_blank">Site web</a>`;
        li.dataset.id = i.id;
        
        ul.appendChild(li);

    });
    ul.addEventListener("click", onClickLI);

    liste.appendChild(ul);
}

/**
 * 
 * @param {object[]} locations
 */
function addAllMarkersByLocations(locations){
    const cinemaIcon = L.icon({
        iconUrl: '../img/cinema.png',
        iconSize: [35,35], // size of the icon
    });

    const cineclubIcon = L.icon({
        iconUrl: '../img/cineclub.png',
        iconSize: [35,35], // size of the icon
    });

    const cultureIcon = L.icon({
        iconUrl: '../img/culture.png',
        iconSize: [35,35], // size of the icon
    });
    
    locations.forEach(information => {
        const marker = L.marker([information.latitude, information.longitude], {
            icon: information.type === "cinéma" ? cinemaIcon : information.type === "ciné-club" ? cineclubIcon : cultureIcon
                }).addTo(map);
        markers[information.id] = marker;
        marker.bindPopup(`<b>${information.nom}</b><br><p>${information.adresse}</p><a href='${information.url}' target="_blank">${information.url}</a>`);
        featureGroup.addLayer(marker);
    });

}

/**
 * 
 * @param {PointerEvent} e
 */
function onClickLI(e){
    const li = e.target;
    if(li.nodeName !== "LI") return;
    const marker = markers[li.dataset.id];
    const latlng = marker.getLatLng();
    map.flyTo([latlng.lat, latlng.lng], 18);
    marker.togglePopup();
}

map.fitBounds(featureGroup.getBounds());