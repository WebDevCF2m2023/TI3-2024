<?php

session_start();

require_once("../config.php");
require_once("../model/localisationsModel.php");
require_once("../model/utilisateursModel.php");

try {
    $dsn = DB_DRIVER.":host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";charset=".DB_CHARSET;
    $db = new PDO(
        $dsn,
        DB_LOGIN,
        DB_MDP,
        [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
}catch (Exception $e){
    die($e->getMessage());
}

if (isset($_GET["all_datas"])){
    $locations = get_all_localisations($db);

    //error
    if(gettype($locations)==="string")echo json_encode(['error' => $locations]);
    //return datas
    else echo json_encode($locations);
}
else if (isset($_SESSION["admin"]) && $_SESSION["admin"]){
    require_once("../controller/privateController.php");
}else {
    require_once("../controller/publicController.php");
}

$db = null;