<?php

require_once("../config.php");
require_once("../model/localisationsModel.php");

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