<?php

if(isset($_GET['disconnect'])){
    userDisconnect();
}elseif(isset($_GET['administration'])){
    $localisationss = getAlllocalisations($db);
    require("../views/private/administration.html.php");
}elseif(isset($_GET['update']) && ctype_digit($_GET['update'])){
    $id = (int) $_GET['update'];
    if(isset($_POST['name'], $_POST['img_url'], $_POST['adresse'], $_POST['long'], $_POST['lat'])){
        $successUpdate = updatelocalisations($db, $id, $_POST['name'], $_POST['img_url'], $_POST['adresse'], (float) $_POST['long'], (float) $_POST['lat']);
        if($successUpdate === true){
            header("Location: ./?administration&updateOK=$id");
            die();
        } else $error = $successUpdate;
    }

    $update = getlocalisationsByID($db, $id);
    require("../views/private/administration.update.html.php");
}elseif(isset($_GET['delete']) && ctype_digit($_GET['delete'])){
    $id = (int) $_GET['delete'];

    if(isset($_GET['good'])){ // on supprime
        $successDelete = deletelocalisationsByID($db, $id);
        if($successDelete === true){
            header("Location: ./?administration&deleteOK=$id");
            die();
        } else $error = $successDelete;
    }elseif(isset($_GET['nogood'])){ // on annule
        header("Location: ./?administration&deleteKO=$id");
        die();
    }

    $delete = getlocalisationsByID($db, $id);
    require("../views/private/administration.delete.html.php");
}elseif(isset($_GET['addlocalisations'])){
    if(isset($_POST['name'], $_POST['img_url'], $_POST['adresse'], $_POST['long'], $_POST['lat'])){
        $successAdd = addlocalisations($db, $_POST['name'], $_POST['img_url'], $_POST['adresse'], (float) $_POST['long'], (float) $_POST['lat']);
        if(!is_string($successAdd)){
            header("Location: ./?administration&addOK=$successAdd");
            die();
        } else $error = $successAdd;
    }
    require("../views/private/administration.add.html.php");
}else{
    require("../views/private/home.html.php");
}

