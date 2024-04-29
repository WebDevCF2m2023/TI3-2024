<?php
session_start();

require_once("../config.php");
require_once("../models/usersModel.php");
require_once("../models/locationsModel.php");


$dsn = DB_DRIVER . ":host=" . DB_HOST . ";charset=" . DB_CHARSET . ";port=" . DB_PORT . ";dbname=". DB_NAME;

try {
    $db = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (Exception $e) {
    die($e->getMessage());
}

if(isset($_GET['json'])){
    require("../controllers/apiController.php");
}else if(isset($_SESSION['connected'])){
    require("../controllers/privateController.php");
}else{
    require("../controllers/publicController.php");
}

$db = null;