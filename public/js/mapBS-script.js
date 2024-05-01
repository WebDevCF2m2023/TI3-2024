const map = L.map('map').setView([50.825, 4.338], 17);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 21,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);



fetch("?json")
.then(function(response){
    response.json().then(function(data){
        console.log(data);
       afficheMarqueurs(data);
        afficheListe(data);
    });

    })
    .catch(function(error){
        console.log(error.message);
    });
    
const markerTable = [];

function afficheMarqueurs(liste){
    for (let item in liste){
        let unMarqueur = L.marker([liste[item].latitude, liste[item].longitude]).addTo(map);
        unMarqueur.bindPopup(`<span class = "mapIcon"><h3>${liste[item].nom}</h3><a target='_blank' href='${liste[item].url}'>${liste[item].url}</a></span>`);

        markerTable.push(unMarqueur);
    }

const groupe = new L.featureGroup(markerTable);

map.fitBounds(groupe.getBounds(),{padding:[10,10]});
}

function afficheListe(liste){
    let i = 0;
    const BSLeft  = document.getElementById("BSListLeft");
    const BSRight = document.getElementById("BSListRight");
    const ULeft   = document.createElement("ul");
    const URight  = document.createElement("ul");
  
    liste.forEach(function(item){
        let LI = document.createElement("li");
        LI.innerHTML = `<span">${item.nom}</span>`;
        LI.addEventListener('click', itemClick);
        LI.setAttribute("id",`${item.id}`);
        LI.classList.add("list-group-item");
        LI.classList.add("bg-transparent");
        LI.classList.add("border-0");
        LI.setAttribute("latitude",`${item.latitude}`);
        LI.setAttribute("longitude",`${item.longitude}`);
        i % 2 === 0 ? ULeft.appendChild(LI) : URight.appendChild(LI);
        i++;
    });

    BSLeft.appendChild(ULeft);
    BSRight.appendChild(URight);
}

function itemClick(){
    let id = this.getAttribute("id");
    let latitude = this.getAttribute("latitude");
    let longitude = this.getAttribute("longitude");

    console.log('item cliqué : ' + id);

    let marqueur = markerTable[id-1];
    marqueur.togglePopup();
    map.flyTo([latitude,longitude],17, {
    animate: true,
    duration: 3 
});
}