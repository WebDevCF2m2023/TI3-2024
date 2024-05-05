<?php



if (isset($_GET["logout"])) {
    include_once("../model/logoutModel.php"); 
    die();   
}

// Comme pour public.view, avant d'afficher la page, prépare les informations nécessaires
$cinemas = getAllCinemas($db);
// $getTypes = getTypesOfCinema($db); // Ceci est utilisé en cas d'insertion ou de mise à jour.
if ($cinemas === false) {
    $errorMessage = "Impossible d'obtenir les informations de la base de données en raison d'une erreur dans le SQL.";
}else if (is_string($cinemas)) {
    $errorMessage = $e;
}

$cineCount = count($cinemas);
if (!empty($_GET[PAGINATION_GET_NAME]) && ctype_digit($_GET[PAGINATION_GET_NAME])) {
    $page = (int) $_GET[PAGINATION_GET_NAME];
} else {
    $page = 1;
}
$pagination = paginationModel("./", PAGINATION_GET_NAME, $cineCount, $page, PAGINATION_NB_PAGE);

if (isset($_GET["carte"])) {
    $title = 'La Carte!';
    include "../view/private/map.view.php";
    die();
}


// Si la suppression d'une entrée a été confirmée
if (isset($_GET["delete"], $_GET["confirm"]) && $_GET["confirm"] === "ok") {
    $id = intClean($_GET["item"]);    
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
    $id = intClean($_GET["item"]);
    $cineDelete = getOneCinema ($db, $id);
    $title = "Préparation de Suppression";
    include ("../view/private/delete.view.php");
    die();
}

// UPDATE

if (isset (
    $_POST["updateNameInp"],
    $_POST["updateTypeInp"],
    $_POST["updateAddInp"],
    $_POST["updateCodeInp"],
    $_POST["updateVilleInp"],
    $_POST["updateUrlInp"],
    $_POST["updateLatInp"],
    $_POST["updateLonInp"],
    $_GET["item"]
))
{

        $nom    = standardClean($_POST["updateNameInp"]);
        $type   = standardClean($_POST["updateTypeInp"]);
        $add    = standardClean($_POST["updateAddInp"]);
        $code   = intClean($_POST["updateCodeInp"]);
        $ville  = standardClean($_POST["updateVilleInp"]);
        $url    = urlClean($_POST["updateUrlInp"]);
        $lat    = floatClean($_POST["updateLatInp"]);
        $lon    = floatClean($_POST["updateLonInp"]);
        $id     = intClean($_GET["item"]);

    $updateCine = updateCinemaInList ($db, $nom, $type, $add, $code, $ville, $url, $lat, $lon, $id);

    if ($updateCine === false) {
        $errorMessage = "Problem with the SQL for insertion";
    } elseif (is_string($updateCine)) {
        $errorMessage = "Problem with the PHP for insertion";
    } 
    $title = "Mise à Jour Réussi";
    header("Location: ./");
    die();

}
if (isset($_GET["update"], $_GET["item"]) && ctype_digit($_GET["item"])) {
    $id = standardClean($_GET["item"]);
    $cineUpdate = getOneCinema($db, $id);
    $title = "Préparation pour mise à jour";
    include ("../view/private/update.view.php");
    die();
}
// INSERTION
// Plus il y a d'entrées, plus cette ligne de code devient longue. 
// La présenter de cette manière augmente grandement la clarté.
if (isset (
            $_POST["itemNameInp"],
            $_POST["itemTypeInp"],
            $_POST["itemAddInp"],
            $_POST["itemCodeInp"],
            $_POST["itemVilleInp"],
            $_POST["itemUrlInp"],
            $_POST["itemLonInp"],
            $_POST["itemLonInp"]
        ))
    {
        
        $nom    = standardClean($_POST["itemNameInp"]);
        $type   = standardClean($_POST["itemTypeInp"]);
        $add    = standardClean($_POST["itemAddInp"]);
        $code   = intClean($_POST["itemCodeInp"]);
        $ville  = standardClean($_POST["itemVilleInp"]);
        $url    = urlClean($_POST["itemUrlInp"]);
        $lat    = floatClean($_POST["itemLonInp"]);
        $lon    = floatClean($_POST["itemLonInp"]);

            $insertCine = insertCinemaIntoList ($db, $nom, $type, $add, $code, $ville, $url, $lat, $lon);

            if ($insertCine === false) {
                $errorMessage = "Problem with the SQL for insertion";
            } elseif (is_string($insertCine)) {
                $errorMessage = "Problem with the PHP for insertion";
            } 
            $title = "Insértion Réussi";
            header("Location: ./");
            die();
        
    }
    
    if (isset($_GET["create"])) {
        $title = "Insértion d'une Lieux";
        include ("../view/private/insert.view.php");
        die();
    }


    // Appel du page d'accueil Admin
    $title = 'Bienvenue Admin à ma nouvelle version de TI3';
    
    include "../view/private/adminhome.view.php";