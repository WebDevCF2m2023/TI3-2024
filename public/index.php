<?php

require_once "../view\public\public.view.php";

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


