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
        $code   = simpleTrim($_POST["itemCodeInp"]);
        $ville  = standardClean($_POST["itemVilleInp"]);
        $url    = urlClean($_POST["itemUrlInp"]);
        $lat    = simpleTrim($_POST["itemLonInp"]);
        $lon    = simpleTrim($_POST["itemLonInp"]);

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
    // INSERTION
    if (isset($_GET["create"])) {
        $title = "Insértion d'une Lieux";
        include ("../view/private/insert.view.php");
        die();
    }

    
    // Appel du page d'accueil Admin
    $title = 'Bienvenue Admin à ma nouvelle version de TI3';
    
    include "../view/private/adminhome.view.php";