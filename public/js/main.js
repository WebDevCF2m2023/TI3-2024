const map = L.map('map').setView([50.845347, 4.350323], 13);
const markers = {};
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
}

function add_marker_location(location){
    const marker = L.marker([location.latitude, location.longitude]).addTo(map);
    markers[location.id] = marker;
    marker.bindPopup(`<h3>${location.nom}</h3><p>${location.rue}</p><a href=${location.url}">Voir le site</a>`);
}