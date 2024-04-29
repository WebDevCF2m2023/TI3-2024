<?php
session_start();

require_once("../config.php");
require_once("../models/utilisateursModel.php");
require_once("../models/localisationsModel.php");


try{
    $connect = new PDO(
        DB_DRIVER.":host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";charset=".DB_CHARSET,
        DB_LOGIN,
        DB_MDP,
        [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
);
}catch(Exception $e){
    die($e->getMessage());
}

if(isset($_GET['json'])){
    require("../controllers/ApiController.php");
}else if(isset($_SESSION['connected'])){
    require("../controllers/privateController.php");
}else{
    require("../controllers/publicController.php");
}

$connect = null;

