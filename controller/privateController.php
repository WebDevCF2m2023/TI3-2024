<?php

if (isset($_GET["p"])){
    switch ($_GET["p"]){
        case "logout":
            logout_admin();
            header("Location: ./");
            die;
    }
}else {
    require_once("../view/private/home.php");
}
