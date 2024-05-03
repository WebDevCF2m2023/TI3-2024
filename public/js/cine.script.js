
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

    mapMarker.bindPopup(`<span class = "cineIconBox"><a href = "${datas[data].url}" target="_blank"><h4>${datas[data].nom}</h4></a><p>${datas[data].add}</p></span>`);
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
            LI.innerHTML = `<span>
                                <span class="PUTCLASSHERE">${item.nom},</span>
                                <span class="PUTCLASSHERE">${item.add},</span>
                                <span class="PUTCLASSHERE">${item.code},</span>
                                <span class="PUTCLASSHERE">${item.ville}.</span>
                                <span>
                                <a href="${item.url}" target="_blank"><img src="img/link.svg" alt="cinema link" class="cineLinkIcon"></a>
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
    map.flyTo([latitude,longitude],18);
}


