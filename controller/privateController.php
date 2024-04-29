<?php

if(isset($_GET['disconnect'])){
    administratorDisconnect();
}elseif(isset($_GET['administration'])){
    $locations = getAllLocations($connect);
    require("../view/private/admin.html.php");
}elseif(isset($_GET['update']) && ctype_digit($_GET['update'])){
    $id = (int) $_GET['update'];
    if(isset($_POST['nom'], $_POST['adresse'], $_POST['codepostal'], $_POST['ville'], $_POST['latitude'], $_POST['longitude'])){
        $successUpdate = updateLocation($connect, $id, $_POST['nom'], $_POST['adresse'], $_POST['codepostal'], $_POST['ville'], (float) $_POST['latitude'], (float) $_POST['longitude']);
        if($successUpdate === true){
            header("Location: ./?admin&updateSuccess=$id");
            die();
        } else $error = $successUpdate;
    }

    $update = getLocationByID($connect, $id);
    require("../view/private/admin.modif.html.php");
}elseif(isset($_GET['delete']) && ctype_digit($_GET['delete'])){
    $id = (int) $_GET['delete'];

    if(isset($_GET['success'])){
        $successDelete = deleteLocationByID($connect, $id);
        if($successDelete === true){
            header("Location: ./?admin&deleteSuccess=$id");
            die();
        } else $error = $successDelete;
    }elseif(isset($_GET['ko'])){ 
        header("Location: ./?admin&deleteSuccess=$id");
        die();
    }

    $delete = getLocationByID($connect, $id);
    require("../view/private/admin.delete.html.php");
}elseif(isset($_GET['addLocation'])){
    if(isset($_POST['nom'], $_POST['adresse'], $_POST['codepostal'], $_POST['ville'], $_POST['latitude'], $_POST['longitude'])){
        $successAdd = addLocation($connect, $id, $_POST['nom'], $_POST['adresse'], $_POST['codepostal'], $_POST['ville'], (float) $_POST['latitude'], (float) $_POST['longitude']);
        if(!is_string($successAdd)){
            header("Location: ./?admin&addOK=$successAdd");
            die();
        } else $error = $successAdd;
    }
    require("../view/private/admin.insert.html.php");
}else{
    require("../view/private/homepage.html.php");
}