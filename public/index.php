<?php

// lancement de la session
session_start();

// appel de dépendances
// configuration
require_once "../config.php";
// Modèles
require_once "../model/utilisateursModel.php";
require_once "../model/localisationsModel.php";

// connexion à la DB 
try{
    // instanciation de notre connexion PDO
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=". DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT , DB_LOGIN, DB_PASSWORD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,]);

}catch(Exception $e){
    die($e->getMessage());
}






// afficher le résultat de la requête sous format JSON
echo json_encode(getLocations($db));

// fermeture de la connexion
$db = null;

// Chargement de tous les emplacements sur la carte
function getLocations(PDO $db): array 
{
    $sql = "SELECT * FROM localisations ORDER BY id ASC";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}








// router

if(isset($_SESSION['username'])){
    // appel du contrôleur private
    require_once "../controller/privateController.php";
    
}else{

// appel du contrôleur public
require_once "../controller/publicController.php";
}

$db = null;