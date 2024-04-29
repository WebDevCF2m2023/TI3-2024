const map = L.map('map').setView([50.8466, 4.3528], 16);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

fetch("apicarte.php")
    .then(function (response) {
        response.json().then(function (data) {
            console.log(data);
            afficheMarqueurs(data);
            afficheListe(data);
        });
    })
    .catch(function (error) {
        console.log(error.message);
    });

    const markerTable = [];

    function afficheMarqueurs(liste) {

        for (let item in liste) {

            let unMarqueur = L.marker([liste[item].latitude, liste[item].longitude]).addTo(map);
            unMarqueur.bindPopup(`<h3>${liste[item].nom}</h3> <p>${liste[item].adresse}</p> <p>${liste[item].codepostal}</p> <p>${liste[item].ville}</p>`);
            markerTable.push(unMarqueur);

        }

        const groupe = new L.featureGroup(markerTable);

        map.fitBounds(groupe.getBounds());
    }

    function afficheListe(liste) {
        const divListe = document.getElementById('liste');
        const ul = document.createElement("ul");

        liste.forEach(function (item, index) {

            let li = document.createElement("li");
            li.innerHTML = `${item.nom} | ${item.adresse} | ${item.codepostal} ${item.ville}`;
            li.addEventListener('click', itemClick);
            li.setAttribute("id", `${item.id}`);
            li.setAttribute("latitude", `${item.latitude}`);
            li.setAttribute("longitude", `${item.longitude}`);

            ul.appendChild(li);

        });

        divListe.appendChild(ul);

    }

    function itemClick() {
        let id = this.getAttribute("id");
        let latitude = this.getAttribute("latitude");
        let longitude = this.getAttribute("longitude");
    
        console.log('item cliqué : ' + id);
        let marqueur = markerTable[id - 1];
        marqueur.togglePopup();
        map.flyTo([latitude, longitude], 16);
    }