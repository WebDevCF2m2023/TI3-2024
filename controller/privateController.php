<?php

function sanitizeInput($input) {
    $input = strip_tags($input);
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

if(isset($_GET['disconnect'])){
    userDisconnect();
}elseif(isset($_GET['administration'])){
    $locations = getAllLocations($db);
    require("../view/private/administration.html.php");
}elseif(isset($_GET['update']) && ctype_digit($_GET['update'])){
    $id = (int) $_GET['update'];
    if(isset($_POST['nom'], $_POST['adresse'], $_POST['codepostal'], $_POST['ville'], $_POST['nb_velos'], $_POST['latitude'], $_POST['longitude'])){        
        $nom = sanitizeInput($_POST['nom']);
        $adresse = sanitizeInput($_POST['adresse']);
        $codepostal = sanitizeInput($_POST['codepostal']);
        $ville = sanitizeInput($_POST['ville']);
        $nb_velos = sanitizeInput($_POST['nb_velos']);
        $latitude = sanitizeInput($_POST['latitude']);
        $longitude = sanitizeInput($_POST['longitude']);
        
        $successUpdate = updateLocationByID($db, $id, $nom, $adresse, $codepostal, $ville, $nb_velos, (float) $latitude, (float) $longitude);        
        if($successUpdate === true){
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
    if(isset($_POST['nom'], $_POST['adresse'], $_POST['codepostal'], $_POST['ville'], $_POST['nb_velos'], $_POST['latitude'], $_POST['longitude'])){        
        $nom = sanitizeInput($_POST['nom']);
        $adresse = sanitizeInput($_POST['adresse']);
        $codepostal = sanitizeInput($_POST['codepostal']);
        $ville = sanitizeInput($_POST['ville']);
        $nb_velos = sanitizeInput($_POST['nb_velos']);
        $latitude = sanitizeInput($_POST['latitude']);
        $longitude = sanitizeInput($_POST['longitude']);
        
        $successAdd = addLocation($db, $nom, $adresse, $codepostal, $ville, $nb_velos, (float) $latitude, (float) $longitude);        
        if(!is_string($successAdd)){
            header("Location: ./?administration&addOK=$successAdd");
            die();
        } else $error = $successAdd;
    }
    require("../view/private/administration.add.html.php");
}else{
    require("../view/private/home.html.php");
}