<?php
// Start the session
session_start();

// Require the config file
require_once("../config.php");
require_once("../model/localisationsModel.php");


$dsn = DB_DRIVER . ":host=" . DB_HOST . ";charset=" . DB_CHARSET . ";port=" . DB_PORT . ";dbname=". DB_NAME;

try {
    $db = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (Exception $e) {
    die($e->getMessage());
}

if(isset($_GET['json'])){
    require("../controllers/ApiController.php");
}else if(isset($_SESSION['connected'])){
    require("../controllers/PrivateController.php");
}else{
    require("../controllers/PublicController.php");
}


$db = null;