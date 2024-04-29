<?php

session_start();

require_once "../config.php";

try{
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=". DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT , DB_LOGIN, DB_PASSWORD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,]);
}catch(Exception $e){
    die($e->getMessage());
}

require_once "../model/utilisateursModel.php";
require_once "../model/localisationsModel.php";
require_once "../controller/privateController.php";
require_once "../controller/adminControl.php";

if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case "accueil" :
            include ("../view/public/homepage.view.html.php");
            break;
    
 
    }

}else if (isset($_GET["connect"])) {
    include ("../view/public/connect.view.html.php");


    
}
    