<?php

session_start();


require_once '../config.php';

require_once "../model/localisationsModel.php";
require_once "../model/utilisateursModel.php";


try {
    $connect = new PDO(
        DB_DRIVER . ":host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_LOGIN,
        DB_MDP,
        [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
    );
} catch (Exception $e) {
    die($e->getMessage());
}


if (isset($_SESSION['myID']) && $_SESSION['myID'] == session_id()) {

    require_once "../controller/privateController.php";
} else {


    require_once "../controller/publicController.php";
}

$connect = null;
