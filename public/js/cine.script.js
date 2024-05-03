
// Pour commencer, nous devrons obtenir le JSON.
fetch("?json")
    .then(function(response){
        response.json().then(function(data){
            makeMarkersForMap(data);
            createListForHomepage(data);
        });

        })
        .catch(function(error){
            console.log(error.message);
    });

// Et, bien sûr, nous allons avoir besoin d'ajouter la carte.
const map = L.map('map').setView([52.825, -4.338], 17);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 21,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

/*
    const markerTable = [];

function makeMarkersForMap(datas){
    for (let data in datas){
        let mapMarker = L.marker([datas[data].lat, datas[data].lon]).addTo(map);
        /* mettre le nom de l'item dans un popup */
 //       mapMarker.bindPopup(`<h3>${datas[data].nom}</h3><p>${datas[data].add}</p>`);

        /* ajouter ce marqueur au tableau */
   //     markerTable.push(mapMarker);
 //   }

// placer le tableau de marqueurs dans le featureGroup */
// const markerGroup = new L.featureGroup(markerTable);

// adapter l'affichage de ma carte en fonction de la position des marqueurs */
// map.fitBounds(markerGroup.getBounds(),{padding:[10,10]});
// }
function makeMarkersForMap (datas) {
const markers = L.markerClusterGroup();
const markerTable = [];
let greenIcon = L.icon({
    iconUrl: 'img/link.svg',
    iconSize:     [38, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
let blueIcon = L.icon({
    iconUrl: 'img/pencil.svg',
    iconSize:     [38, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
let redIcon = L.icon({
    iconUrl: 'img/trash.svg',
    iconSize:     [38, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

for (let data in datas){

// change what's displayed on the icons
datas[data].type === "cinéma" ? 
    mapMarker = L.marker([datas[data].lat, datas[data].lon],{icon: greenIcon}) :
datas[data].type === "ciné-club" ?     
    mapMarker = L.marker([datas[data].lat, datas[data].lon],{icon: redIcon}) :
    mapMarker = L.marker([datas[data].lat, datas[data].lon],{icon: blueIcon});

    mapMarker.bindPopup(`<h4>${datas[data].nom}</h4><p>${datas[data].add}</p>`);
markers.addLayer(mapMarker);
markerTable.push(mapMarker);
}
map.addLayer(markers);
const groupe = new L.featureGroup(markerTable);

map.fitBounds(groupe.getBounds(), {padding:[10,10]});
}

// Comme l'indique clairement le nom de la fonction, créez la liste pour la page d'accueil.
function createListForHomepage(data){
    
    const cineJSON = document.getElementById("cineJSON");   // Rencontrez le grand-père !
    const UL       = document.createElement("ul");  // Création du parent <ul>

        data.forEach(function(item){

            let LI = document.createElement("li");  // Création de l'enfant <li>

                // Ajout du HTML nécessaire (Éducation de l'enfant ;-D )
            LI.innerHTML = `<span class = "PUTOTHERCLASSHERE">
                                <span class="PUTCLASSHERE">${item.nom},</span>
                                <span class="PUTCLASSHERE">${item.add},</span>
                                <span class="PUTCLASSHERE">${item.code},</span>
                                <span class="PUTCLASSHERE">${item.ville}.</span>
                                <span class="PUTCLASSHERE">
                                <a href="${item.url}" target="_blank"><img src="img/link.svg" alt=""></a>
                                </span>
                            </span>`;

            LI.addEventListener('click', itemClick);    // Écoute pour des clics
                // Préparation pour le "flyTo"
            LI.setAttribute("id",`${item.id}`);
            LI.setAttribute("lat",`${item.lat}`);
            LI.setAttribute("lon",`${item.lon}`);

            UL.appendChild(LI); // Maintenant qu'ils ont été créés, ajoutez les enfants à leurs parents.
            
        });
        // Et enfin, présentez-les à leurs grands-parents
    cineJSON.appendChild(UL);
}

function itemClick () {
    let id          = this.getAttribute("id");
    let latitude    = this.getAttribute("lat");
    let longitude   = this.getAttribute("lon");

    console.log('item cliqué : ' + id);

   // let marqueur = markerTable[id];
   // marqueur.togglePopup();
    map.flyTo([latitude,longitude],17);
}


