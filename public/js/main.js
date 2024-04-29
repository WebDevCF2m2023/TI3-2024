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
    //add markers to map
    locations.forEach((location)=>{
        add_marker_location(location);
    })
    const group = new L.featureGroup(markers);
    map.fitBounds(group.getBounds());
    //add locations to list
    const tbody = document.querySelector("#locations-table tbody");
    locations.forEach((location)=>{
        tbody_add_location(tbody, location);
    })
}

function add_marker_location(location){
    const marker = L.marker([location.latitude, location.longitude]).addTo(map);
    marker.bindPopup(`<h3>${location.nom}</h3><p>${location.rue} ${location.codepostal} Bruxelles</p><p>tel: ${location.telephone}</p><a href=${location.url}">Voir le site</a>`);
    markers_hashmap[location.id] = marker;
    markers.push(marker);
}

function tbody_add_location(tbody, location){
    const tr = document.createElement("tr");
    //name
    const td1 = document.createElement("td");
    td1.textContent = location.nom;
    //adresse
    const td2 = document.createElement("td");
    td2.textContent = `${location.rue} ${location.codepostal} Bruxelles`;
    //telephone
    const td3 = document.createElement("td");
    td3.textContent = location.telephone;
    //url
    const td4 = document.createElement("td");
    const a4 = document.createElement("a");
    a4.href = location.url;
    a4.textContent = "Voir le site";
    td4.insertAdjacentElement("afterbegin", a4);
    //icon
    const td5 = document.createElement("td");
    td5.classList.add("text-center");
    const icon_i = document.createElement("i");
    icon_i.classList.add("fa", "fa-eye", "text-primary")
    td5.insertAdjacentElement("afterbegin", icon_i);
    //insert tds in tr
    tr.insertAdjacentElement("beforeend", td1);
    tr.insertAdjacentElement("beforeend", td2);
    tr.insertAdjacentElement("beforeend", td3);
    tr.insertAdjacentElement("beforeend", td4);
    tr.insertAdjacentElement("beforeend", td5);
    //insert the tr
    tbody.insertAdjacentElement("afterbegin", tr);
}