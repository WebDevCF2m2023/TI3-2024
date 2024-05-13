fetch("?json")
    .then(function(response){
        response.json().then(function(data){
            makeMarkersForMap(data);
   //         createListForHomepage(data);
        });

        })
        .catch(function(error){
            console.log(error.message);
    });

// Et, bien sûr, nous allons avoir besoin d'ajouter la carte.
const map = L.map('map').setView([50.825, -4.338], 17);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 21,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    
    function makeMarkersForMap (datas) {
        const markers = L.markerClusterGroup();
        const markerTable = [];
            // Création et positionnement des icônes
            let greenIcon = L.icon({
                iconUrl: 'img/film.svg',
                iconSize:     [38, 95], 
                shadowSize:   [50, 64], 
                iconAnchor:   [22, 94], 
                shadowAnchor: [4, 62],  
                popupAnchor:  [-3, -76] 
            });
            let blueIcon = L.icon({
                iconUrl: 'img/camera.svg',
                iconSize:     [38, 95], 
                shadowSize:   [50, 64], 
                iconAnchor:   [22, 94], 
                shadowAnchor: [4, 62],  
                popupAnchor:  [-3, -76] 
            });
            let redIcon = L.icon({
                iconUrl: 'img/person.svg',
                iconSize:     [38, 95], 
                shadowSize:   [50, 64], 
                iconAnchor:   [22, 94], 
                shadowAnchor: [4, 62],  
                popupAnchor:  [-3, -76] 
            });
    
    for (let data in datas){
    // Sélection d'icônes pour chaque catégorie
    datas[data].type === "cinéma" ? 
        mapMarker = L.marker([datas[data].lat, datas[data].lon],{icon: greenIcon}) :
    datas[data].type === "ciné-club" ?     
        mapMarker = L.marker([datas[data].lat, datas[data].lon],{icon: redIcon}) :
        mapMarker = L.marker([datas[data].lat, datas[data].lon],{icon: blueIcon});
    
        mapMarker.bindPopup(`<span class = "text-center"><a href = "${datas[data].url}" target="_blank"><h4>${datas[data].nom}</h4></a><p>${datas[data].add}</p></span>`);
    markers.addLayer(mapMarker);
    markerTable.push(mapMarker);
    }
    map.addLayer(markers);
    const groupe = new L.featureGroup(markerTable);
    
    map.fitBounds(groupe.getBounds(), {padding:[10,10]});
    }



const LI = document.querySelectorAll(".list-group-item")
for (let i = 0; i < LI.length; i++) {
    LI[i].addEventListener('click', itemClick);
}
function itemClick () {
    console.log(this.id);
    let id          = this.getAttribute("id");
    let latitude    = this.getAttribute("lat");
    let longitude   = this.getAttribute("lon");

    map.flyTo([latitude,longitude],18);
}