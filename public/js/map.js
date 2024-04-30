const map = L.map('map').setView([50.830200, 4.338000], 13);

const markers = {};
let bounds = L.latLngBounds(); // Create an empty bounds object


L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


fetch('?json') // Fetch the localisations
    .then(response=>response.json()) // Parse the response as JSON
    .then(handleResponse) // Call the function to handle the response
    .catch(error=>console.error("Error: ", error)); // Log any errors that are returned



function handleResponse(localisations)  {
    if(localisations.error !== undefined) { // If there is an error
        console.error(localisations.error); // Log the error
        return;
    }
    addAllMarkersByLocations(localisations);
    addAllToListe(localisations);
    map.fitBounds(bounds); // Fit the map to the bounds

}

function addAllToListe(localisations) {
    
    const liste = document.getElementById('liste');
    const ul = document.createElement('ul');

    localisations.forEach(i => {
        const li = document.createElement('li');

        li.innerHTML = `${i.nom} | ${i.adresse} - ${i.codepostal} ${i.ville} | Nombre de velos : ${i.nb_velos}`;
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
        marker.bindPopup(`<b>${information.nom}</b><br><p>${information.adresse}, ${information.codepostal} ${information.ville}</p><p>Nombre des velos: ${information.nb_velos}</p>`);
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