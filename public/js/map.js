const map = L.map('map').setView([0.0, 0.0], 2);

const markers = {};

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


fetch('?json')
    .then(response=>response.json())
    .then(handleResponse)
    .catch(error=>console.error("Error: ", error));

    console.log("test");

function handleResponse(localisations)  {
    if(localisations.error !== undefined) {
        console.error(localisations.error);
        return;
    }
    addAllMarkersByLocations(localisations);
    addAllToListe(localisations);
}

function addAllToListe(localisations) {
    
    const liste = document.getElementById('liste');
    const ul = document.createElement('ul');

    localisations.forEach(i => {
        const li = document.createElement('li');

        li.innerHTML = `${i.nom} | ${i.adresse} - ${i.codepostal} ${i.ville}`;
        li.dataset.id = i.id;
        
        ul.appendChild(li);

    });
    ul.addEventListener("click", onClickLI);

    liste.appendChild(ul);
}


function addAllMarkersByLocations(localisations){
    localisations.forEach(information => {
        const marker = L.marker([information.latitude, information.longitude]).addTo(map);
        markers[information.id] = marker;
        marker.bindPopup(`<b>${information.nom}</b><br><p>${information.adresse}`);
    });

}

function onClickLI(e){
    const li = e.target;
    if(li.nodeName !== "LI") return;
    const marker = markers[li.dataset.id];
    const latlng = marker.getLatLng();
    map.flyTo([latlng.lat, latlng.lng], 16);
    marker.togglePopup();
}