
// Pour commencer, nous devrons obtenir le JSON.
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