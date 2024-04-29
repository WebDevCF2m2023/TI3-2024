<?php

if (isset($_GET["p"])){
    switch ($_GET["p"]){
        case "logout":
            logout_admin();
            header("Location: ./");
            die;
    }
}
elseif (isset($_GET["edit"])){
    if (is_numeric($_GET["edit"])){
        //if update
        if (isset($_POST["name"], $_POST["street"], $_POST["postal"], $_POST["telephone"], $_POST["url"], $_POST["latitude"], $_POST["longitude"])){
            update_localisation_by_id($db, $_GET["edit"], $_POST["name"], $_POST["street"], $_POST["postal"], $_POST["telephone"], $_POST["url"], $_POST["latitude"], $_POST["longitude"]);
        }
        $id = (int)$_GET["edit"];
        $result = get_localisation_by_id($db, $id);
        if (gettype($result) === "string"){
            $error = $result;
        }else {
            $location = $result;
        }
    }else {
        $error = "id not valid";
    }
    require("../view/private/edit.php");
}
elseif (isset($_GET["delete"])){
    var_dump($_POST);
    $id = (int)$_GET["delete"];
    if (isset($_POST["confirm"])){
        $result = remove_location($db, $id);
        if ($result===true){
            header("Location: ./");
            die;
        }else {
            $error = $result;
        }
    }
    $result = get_localisation_by_id($db, $id);
    if (gettype($result) === "string"){
        $error = $result;
    }else {
        $location = $result;
    }
    require("../view/private/delete.php");
}
else {
    require_once("../view/private/home.php");
}
