const map = L.map('map').setView([50.845347, 4.350323], 13);
const markers_hashmap = {};
const markers = [];
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

fetch("./?all_datas").then(res=>res.json()).then(handle_res).catch(error=>console.log("error", error));

function handle_res(locations){
    if(locations.error){
        alert(locations.error);
        return;
    }
    locations.forEach((location)=>{
        add_marker_location(location);
    })
    const group = new L.featureGroup(markers);
    map.fitBounds(group.getBounds());
}

function add_marker_location(location){
    const marker = L.marker([location.latitude, location.longitude]).addTo(map);
    marker.bindPopup(`<h3>${location.nom}</h3><p>${location.rue} ${location.codepostal} Bruxelles</p><p>tel: ${location.telephone}</p><a href=${location.url}">Voir le site</a>`);
    markers_hashmap[location.id] = marker;
    markers.push(marker);
}