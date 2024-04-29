
const carte = L.map('carte').setView([50.8467139, 4.3525151], 16);


L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(carte);


const fetchOptions = { method: 'GET', mode: "cors", cache: 'default' };


fetch('./?loadDatas', fetchOptions)

    .then(function (response) {
        response.json().then(function (data) {
            console.log(data);
            afficheMarqueurs(data);
            afficheListe(data);
        });
    })

    .catch(function (error) {
        console.log('Problèmes avec le fetch : ' + error.message);
    });




const lesMarqueurs = [];





function afficheMarqueurs(pointsGeo) {

    for (let item in pointsGeo) {

        let unMarqueur = L.marker([pointsGeo[item].latitude, pointsGeo[item].longitude]).addTo(carte);


        unMarqueur.bindPopup(
            `<h3>${pointsGeo[item].nom}</h3>
            <p>${pointsGeo[item].adresse}</p>
            <p>${pointsGeo[item].codepostal}</p>
            <p>${pointsGeo[item].ville}</p>
            `);


        lesMarqueurs.push(unMarqueur);
    }


    const groupe = new L.featureGroup(lesMarqueurs);


    carte.fitBounds(groupe.getBounds());
}


function afficheListe(donnees) {
    const liste = document.getElementById('liste');


    const UL = document.createElement("ul");


    donnees.forEach(function (item, index) {

        let LI = document.createElement("li");

        LI.innerHTML = `${item.nom} | ${item.adresse} à ${item.ville} (${item.codepostal})  `;
        
        LI.setAttribute("lat", `${item.latitude}`);
        LI.setAttribute("lng", `${item.longitude}`);
        LI.setAttribute("id", `${item.id}`);

        LI.addEventListener('click', clicItem);

        UL.appendChild(LI);
    });


    liste.appendChild(UL);
}

function clicItem() {
    console.log('Item cliqué');
    let latitude = this.getAttribute('lat');
    let longitude = this.getAttribute('lng');
    let id = this.getAttribute('id');
    console.log(`${latitude} ${longitude}`);

    let marqueur = lesMarqueurs[id];

    carte.flyTo([latitude, longitude], 17);

    marqueur.togglePopup();
}