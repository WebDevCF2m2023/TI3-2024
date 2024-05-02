<?php

if(isset($_GET['disconnect'])){
    userDisconnect();
}elseif(isset($_GET['administration'])){
    $locations = getAllLocations($db);
    require("../view/private/administration.html.php");
}elseif(isset($_GET['update']) && ctype_digit($_GET['update'])){
    $id = (int) $_GET['update'];
    if(isset($_POST['nom'], $_POST['adresse'], $_POST['codepostal'], $_POST['ville'], $_POST['nb_velos'], $_POST['latitude'], $_POST['longitude'])){        $successUpdate = updateLocationByID($db, $id, $_POST['nom'], $_POST['adresse'], $_POST['codepostal'], $_POST['ville'], $_POST['nb_velos'], (float) $_POST['latitude'], (float) $_POST['longitude']);        if($successUpdate === true){
            header("Location: ./?administration&updateOK=$id");
            die();
        } else $error = $successUpdate;
    }

    $update = getLocationByID($db, $id);
    require("../view/private/administration.update.html.php");
}elseif(isset($_GET['delete']) && ctype_digit($_GET['delete'])){
    $id = (int) $_GET['delete'];

    if(isset($_GET['ok'])){ // on supprime
        $successDelete = deleteLocationByID($db, $id);
        if($successDelete === true){
            header("Location: ./?administration&deleteOK=$id");
            die();
        } else $error = $successDelete;
    }elseif(isset($_GET['ko'])){ // on annule
        header("Location: ./?administration&deleteKO=$id");
        die();
    }

    $delete = getLocationByID($db, $id);
    require("../view/private/administration.delete.html.php");
}elseif(isset($_GET['addLocation'])){
    if(isset($_POST['nom'], $_POST['adresse'], $_POST['codepostal'], $_POST['ville'], $_POST['nb_velos'], $_POST['latitude'], $_POST['longitude'])){        $successAdd = addLocation($db, $_POST['nom'], $_POST['adresse'], $_POST['codepostal'], $_POST['ville'], $_POST['nb_velos'], (float) $_POST['latitude'], (float) $_POST['longitude']);        if(!is_string($successAdd)){
            header("Location: ./?administration&addOK=$successAdd");
            die();
        } else $error = $successAdd;
    }
    require("../view/private/administration.add.html.php");
}else{
    require("../view/private/home.html.php");
}