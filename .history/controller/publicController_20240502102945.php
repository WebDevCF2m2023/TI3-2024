<?php


// si on essaie de se connecter
if(isset($_GET['connect'])){

    // si on clique sur connexion
    if(isset($_POST['username'],$_POST['passwd'])){

        // on met dans une variable la tentative de connexion
        $connection = administratorConnect($connect,$_POST['username'],$_POST['passwd']);


        if($connection === true){
            header("Location: ./");
            die();
        }

    }

    // appel de la vue
    require "../view/public/connect.html.php";
    exit();
}

// si on veut récupérer les données en json (pNos JS, Leaflet, OpenStreetMap)
if(isset($_GET['json'])){
    $NosDatas = getAllNosdatas($connect,"ASC");
    echo json_encode($NosDatas);
    exit();
}

// on charge toutes les données
$NosDatas = getAllNosdatas($connect);
// pas encore de données
if(is_string($NosDatas)) $message = $NosDatas;

elseif(isset($NosDatas['error'])) $error = $NosDatas['error'];


// chargement de la vue de l'accueil
require "../view/public/homepage.html.php";