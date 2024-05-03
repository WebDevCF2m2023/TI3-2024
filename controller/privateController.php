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


// Si la suppression d'une entrée a été confirmée
if (isset($_GET["delete"], $_GET["confirm"]) && $_GET["confirm"] === "ok") {
    $id = standardClean($_GET["item"]);    
    $deleteCine = deleteCinemaFromList ($db, $id);
        if ($deleteCine === true) {
            header ("Location: ./");
            die();
        }else if (is_string(($deleteCine))) {
            $errorMessage = "Something went wrong with PHP";
            header ("Location: ./");
            die();
        }else {
            $errorMessage = "Something went wrong with SQL";
            header ("Location: ./");
            die();
        }
// Preparation d'une entrée pour suppression        
}else if (isset($_GET["delete"], $_GET["item"]) && ctype_digit($_GET["item"])) {
    $id = standardClean($_GET["item"]);
    $cineDelete = getOneCinema ($db, $id);
    $title = "Préparation de Suppression";
    include ("../view/private/delete.view.php");
    die();
}





// Appel du page d'accueil Admin
$title = 'Bienvenue Admin à ma nouvelle version de TI3';
$cineCount = count($cinemas);
include "../view/private/adminhome.view.php";