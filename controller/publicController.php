<?php
/*
if (isset($_GET["login"])) {
    //  if -------LOGIN POSTS HERE
        $title = "Connexion d'utilisateur";
        include "../view/public/login.view.php";
    die();
}
*/

if (isset($_POST["userNameInp"], $_POST["userPassInp"])) {
    
    $nom = standardClean($_POST["userNameInp"]);
    $pwd = simpleTrim($_POST["userPassInp"]);

    $login = attemptUserLogin ($db, $nom, $pwd);

    if ($login === true) {
        header ("Location: ./");
    }else if (is_string($login)) {
        $errorMessage = "Problem with attemptUserLogin SQL";
    }else {
        
        $title = "Incorrect Login";
        $cinemas = getAllCinemas($db);
        $cineCount = count($cinemas);
        $errorMessage = "Saisissez correctement vos détails";
    include "../view/public/pubhome.view.php";
    die();
}
}


$cinemas = getAllCinemas($db);  // Avant d'afficher la page, prépare les informations nécessaires.
    if ($cinemas === false) {
        $errorMessage = "Impossible d'obtenir les informations de la base de données en raison d'une erreur dans le SQL.";
        include "../view/public/pubhome.view.php";
        die();
    }else if (is_string($cinemas)) {
        $errorMessage = "Impossible d'obtenir les informations de la base de données en raison d'une erreur dans le PHP.";
        include "../view/public/pubhome.view.php";
        die();
    }
    $title = 'Bienvenue dans ma nouvelle version de TI3';
    $cineCount = count($cinemas);
    include "../view/public/pubhome.view.php";
    die();
