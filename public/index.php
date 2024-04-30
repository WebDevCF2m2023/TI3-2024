<?php

session_start();
if (!isset($_SESSION["pageCount"])){
    $_SESSION['pageCount'] = 0;
    }
    
require_once("../config.php");
require_once("../controller/dbConnectController.php");
require_once('../model/localisationsModel.php');
require_once("../model/utilisateursModel.php");
require_once("../controller/publicController.php");
require_once('../controller/privateController.php');
require_once("../controller/routeController.php");

$db = null;
