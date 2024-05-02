<?php

if(isset($_GET['disconnect'])){
    administratorDisconnect();
}elseif(isset($_GET['administration'])){
    $locations = getAllLocations($connect);
    require("../view/private/admin.html.php");
}elseif(isset($_GET['update']) && ctype_digit($_GET['update'])){
    $id = (int) $_GET['update'];
    if(isset($_POST['rue'], $_POST['codepostal'], $_POST['ville'], $_POST['latitude'], $_POST['longitude'])){
        $successUpdate = updateLocation($connect, $id, $_POST['rue'], $_POST['codepostal'], $_POST['ville'], (float) $_POST['latitude'], (float) $_POST['longitude']);
        if($successUpdate === true){
            header("Location: ./?administration");
            die();
        } else $error = $successUpdate;
    }

    $update = getLocationByID($connect, $id);
    require("../view/private/admin.modif.html.php");
}elseif(isset($_GET['delete']) && ctype_digit($_GET['delete'])){
    $id = (int) $_GET['delete'];

    if(isset($_GET['ok'])){
        $successDelete = deleteLocationByID($connect, $id);
        if($successDelete === true){
            header("Location: ./?administration");
            die();
        } else $error = $successDelete;
    }elseif(isset($_GET['ko'])){ 
        header("Location: ./?administration");
        die();
    }

    $delete = getLocationByID($connect, $id);
    require("../view/private/admin.delete.php");
}elseif(isset($_GET['addLocation'])){
    if(isset($_POST['rue'], $_POST['codepostal'], $_POST['ville'], $_POST['latitude'], $_POST['longitude'])){
        $successAdd = addLocation($connect, $_POST['rue'], $_POST['codepostal'], $_POST['ville'], (float) $_POST['latitude'], (float) $_POST['longitude']);
        if(!is_string($successAdd)){
            header("Location: ./?administration");
            die();
        } else $error = $successAdd;
    }
    require("../view/private/admin.insert.html.php");
}else{
    require("../view/private/home.html.php");
}