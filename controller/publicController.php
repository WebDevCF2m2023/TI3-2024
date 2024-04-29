<?php

if (isset($_GET["p"])){
    switch ($_GET["p"]){
        case "login":
            if (isset($_POST["username"], $_POST["password"])){
                $result = connection_admin($db, $_POST["username"], $_POST["password"]);
                if ($result===true){
                    header("Location: ./");
                    die;
                }
                $error = $result;
            }
            require_once("../view/public/login.php");
            break;
    }
}else {
}