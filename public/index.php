<?php
session_start();

require_once("../config.php");
require_once("../model/utilisateursModel.php");
require_once("../model/localisationsModel.php");


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
    require("../controller/ApiController.php");
}else if(isset($_SESSION['connected'])){
    require("../controller/privateController.php");
}else{
    require("../controller/publicController.php");
}

$connect = null;

