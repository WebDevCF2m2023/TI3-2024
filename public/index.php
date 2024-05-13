<?php
//  D'accord, voici le début de la session.
session_start();    

// Cela sera utilisé pour contrôler la façon dont certaines pages et animations sont affichées.

// Appelle toutes les dépendances habituelles.
require_once("../config.php");
require_once("../controller/dbConnectController.php");

// À titre expérimental, j'ai déplacé toute la sanitisation dans une Model séparée
require_once("../model/laundryModel.php");

require_once('../model/localisationsModel.php');
require_once("../model/utilisateursModel.php");

// Comme j'aurai besoin d'appeler cela à la fois pour l'administrateur et le visiteur, autant le faire ici.
require_once("../controller/jsonController.php");


// Vérifie si l'identifiant de session correspond (ce qui ne peut se produire que si la connexion est fait).
if (isset($_SESSION["id"]) && ($_SESSION["id"]) === session_id()) {
    // Appelle le contrôleur administrateur. 
    require_once('../controller/privateController.php');
}else {
    // Sinon, appelle le contrôleur public.
    require_once("../controller/publicController.php");
}


// Et bien sûr, ferme la connexion.
$db = null;