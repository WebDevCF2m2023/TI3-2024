<?php

if (isset($_GET["login"])) {
    //  if -------LOGIN POSTS HERE
        $title = "Connexion d'utilisateur";
        include "../view/public/login.view.php";
    die();
}


$cinemas = getAllCinemas($db);  // Avant d'afficher la page, prépare les informations nécessaires.
    if ($cinemas === false) {
        $errorMessage = "Impossible d'obtenir les informations de la base de données en raison d'une erreur dans le SQL.";
    }else if (is_string($cinemas)) {
        $errorMessage = $e;
    }

    $title = 'Bienvenue dans ma nouvelle version de TI3';
    $cineCount = count($cinemas);
    include "../view/public/pubhome.view.php";
die();