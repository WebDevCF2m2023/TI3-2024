<?php

if (isset($_GET["p"])){
    switch ($_GET["p"]){
        case "login":
            if (isset($_POST["username"], $_POST["password"])){
                $result = connection_admin($db, $_POST["username"], $_POST["password"]);
                if ($result===true){
                    header("Location: ./");
                    break;
                }
                $error = $result;
            }
            require_once("../view/public/login.php");
            break;
        default:
            require_once("../view/public/home.php");
    }
}else {
    require_once("../view/public/home.php");
}