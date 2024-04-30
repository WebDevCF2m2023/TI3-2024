<?php

require_once "../public\vuePublique.php";

session_start();

require_once "../config.php";
require_once "../model\utilisateursModel.php";
require_once "../model\localisationsModel.php";

try{
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=". DB_NAME . ";charset=" . DB_CHARSET .
     ";port=" . DB_PORT , DB_LOGIN, DB_PASSWORD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,]);

}catch(Exception $e){
    die($e->getMessage());
    // No exit here, we just kill.
}

if (isset($_SESSION['username'])) {
    require_once "../controller/privateController.php";
} else {
    require_once "../controller/publicController.php";
}

$db = null;