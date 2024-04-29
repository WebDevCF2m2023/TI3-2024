<?php

if (isset($_GET["p"])){
    switch ($_GET["p"]){
        case "login":
            require_once("../view/public/login.php");
            break;
    }
}else {
}