<?php

function formIsSet():bool{
    return isset(
        $_POST['name'], 
        $_POST['type'], 
        $_POST['adresse'], 
        $_POST['codePostal'], 
        $_POST['country'], 
        $_POST['url'], 
        $_POST['latitude'], 
        $_POST['longitude']);
}
/**
 * @return bool true if success
 */
function secureValueFromForm() : bool{
    $_POST['name'] =  htmlspecialchars(strip_tags(trim($_POST['name']), ENT_QUOTES));
    $_POST['type'] = htmlspecialchars(strip_tags(trim($_POST['type']), ENT_QUOTES));
    $_POST['adresse'] = htmlspecialchars(strip_tags(trim($_POST['adresse']), ENT_QUOTES));
    $_POST['codePostal'] = htmlspecialchars(strip_tags(trim($_POST['codePostal']), ENT_QUOTES));
    $_POST['country'] = htmlspecialchars(strip_tags(trim($_POST['country']), ENT_QUOTES));
    $_POST['url'] = htmlspecialchars(strip_tags(trim($_POST['url']), ENT_QUOTES));

    $name = $_POST['name'];
    if(strlen($name) === 0 || strlen($name) > 50){
        return false;
    }
    
    $type = $_POST['type'];
    if(strlen($type) === 0 || strlen($type) > 20){
        return false;
    }

    $adresse = $_POST['adresse'];
    if(strlen($adresse) === 0 || strlen($adresse) > 100){
        return false;
    }
    $regex = "/^\d\d\d\d$/i";
    
    $codePostal = $_POST['codePostal'];
    if(!preg_match($regex, $codePostal)){
        return false;
    }
    
    $country = $_POST['country'];
    if(strlen($country) === 0 || strlen($country) > 20){
        return false;
    }

    $url = $_POST['url'];
    if(strlen($url) === 0 || strlen($url) > 200){
        return false;
    }

    $regex = "/^-?\d{1,2}(\.\d{1,6})?$/i";

    $latitude = $_POST['latitude'];
    if(!preg_match($regex, $latitude)){
        return false;
    }

    $longitude = $_POST['longitude'];
    if(!preg_match($regex, $longitude)){
        return false;
    }

    return true;
}

if(isset($_GET['disconnect'])){
    userDisconnect();
}elseif(isset($_GET['administration'])){
    $locations = getAllLocations($db);
    require("../view/private/administration.html.php");
}elseif(isset($_GET['update']) && ctype_digit($_GET['update'])){
    $id = (int) $_GET['update'];
    if(formIsSet()){
        $secure = secureValueFromForm();
        if($secure === true){
            $successUpdate = updateLocation($db, $id, 
                                $_POST['name'], 
                                $_POST['type'], 
                                $_POST['adresse'], 
                                $_POST['codePostal'], 
                                $_POST['country'], 
                                $_POST['url'], 
                                (float) $_POST['latitude'], 
                                (float) $_POST['longitude']);
    
            if($successUpdate === true){
                header("Location: ./?administration&updateOK=$id");
                die();
            } else $error = $successUpdate;
        }
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
    if(formIsSet()){
        $secure = secureValueFromForm();
        if($secure === true){
            $successAdd = addLocation($db, 
                                $_POST['name'], 
                                $_POST['type'], 
                                $_POST['adresse'], 
                                $_POST['codePostal'], 
                                $_POST['country'], 
                                $_POST['url'], 
                                (float) $_POST['latitude'], 
                                (float) $_POST['longitude']);
    
            if(!is_string($successAdd)){
                header("Location: ./?administration&addOK=$successAdd");
                die();
            } else $error = $successAdd;
        }
    }
    require("../view/private/administration.add.html.php");
}else{
    require("../view/private/home.html.php");
}