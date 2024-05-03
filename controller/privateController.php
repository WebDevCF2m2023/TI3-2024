<?php



if (isset($_GET["logout"])) {
    include_once("../model/logoutModel.php"); 
    die();   
}

// Comme pour public.view, avant d'afficher la page, prépare les informations nécessaires
$cinemas = getAllCinemas($db);
if ($cinemas === false) {
    $errorMessage = "Impossible d'obtenir les informations de la base de données en raison d'une erreur dans le SQL.";
}else if (is_string($cinemas)) {
    $errorMessage = $e;
}

$title = 'Bienvenue Admin à ma nouvelle version de TI3';
$cineCount = count($cinemas);
// Appel du page d'accueil Admin
include "../view/private/adminhome.view.php";





