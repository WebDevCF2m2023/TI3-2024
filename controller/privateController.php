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
    $_POST['adresse'] = htmlspecialchars(strip_tags(trim($_POST['adresse']), ENT_QUOTES));
    $_POST['codePostal'] = htmlspecialchars(strip_tags(trim($_POST['codePostal']), ENT_QUOTES));
    $_POST['country'] = htmlspecialchars(strip_tags(trim($_POST['country']), ENT_QUOTES));
    $_POST['url'] = htmlspecialchars(strip_tags(trim($_POST['url']), ENT_QUOTES));

    $name = $_POST['name'];
    if(strlen($name) === 0 || strlen($name) > 50){
        return false;
    }
    
    $type = $_POST['type'];
    if(!ctype_digit($type) || ((int) $type) >= count(TYPES_CATEGORIES))
        return false;

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

    $regex = "/^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,190}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()!@:%_\+.~#?&\/\/=]*)/";

    $url = $_POST['url'];
    if(strlen($url) === 0 || strlen($url) > 200 || !preg_match($regex, $url) || !filter_var($url, FILTER_VALIDATE_URL)){
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
        $isBooststrapTable = isset($_POST['bootstraptable']) && ctype_digit($_POST['bootstraptable']);
        if($isBooststrapTable) header('Content-Type: application/json; charset=utf-8');
        if($secure === true){
            $successUpdate = updateLocation($db, $id, 
                                $_POST['name'], 
                                TYPES_CATEGORIES[$_POST['type']], 
                                $_POST['adresse'], 
                                $_POST['codePostal'], 
                                $_POST['country'], 
                                $_POST['url'], 
                                (float) $_POST['latitude'], 
                                (float) $_POST['longitude']);
            if($isBooststrapTable){
                if($successUpdate === true) echo json_encode([
                    'success' => true, 
                    'update' => $id, 
                    'name' => $_POST['name'], 
                    'type' => TYPES_CATEGORIES[$_POST['type']], 
                    'adresse' => $_POST['adresse'], 
                    'codepostal' => $_POST['codePostal'], 
                    'ville' => $_POST['country'], 
                    'url' => $_POST['url'], 
                    'latitude' => $_POST['latitude'], 
                    'longitude' => $_POST['longitude'],
                    'index' => (int)$_POST['bootstraptable']
                ]);
                else echo json_encode(['error' => $successUpdate, 'update' => $id, 'index' => (int)$_POST['bootstraptable']]);
                die();
            }else{
                if($successUpdate === true){
                    header("Location: ./?administration&updateOK=$id");
                    die();
                } else $error = $successUpdate;
            }
        }
        if($isBooststrapTable){
            echo json_encode([
                'secure' => "Données reçu incorrect", 
                'update' => $id, 
                'name' => $_POST['name'], 
                'type' => $_POST['type'], 
                'adresse' => $_POST['adresse'], 
                'codepostal' => $_POST['codePostal'], 
                'ville' => $_POST['country'], 
                'url' => $_POST['url'], 
                'latitude' => htmlspecialchars($_POST['latitude']), 
                'longitude' => htmlspecialchars($_POST['longitude']),
                'index' => (int)$_POST['bootstraptable']
            ]);
            die();
        }
    }

    $update = getLocationByID($db, $id);
    $update['type'] = "".array_search($update['type'], TYPES_CATEGORIES);
    require("../view/private/administration.update.html.php");
}elseif(isset($_GET['delete']) && ctype_digit($_GET['delete'])){
    $id = (int) $_GET['delete'];
    if(isset($_GET['multiple'], $_POST['bootstraptable']) && ctype_digit($_POST['bootstraptable'])){
        if(preg_match("/^(\d+(,\d+)*)?$/", $_GET['multiple'])){
            $explode = explode(",", $_GET['multiple']);
            foreach($explode as $value)
                deleteLocationByID($db, (int)$value);
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(['success' => true, 'multiple' => $_GET['multiple']]);
            die();
        }
    }
    else if(isset($_GET['ok'])){ // on supprime
        $successDelete = deleteLocationByID($db, $id);
        if(isset($_POST['bootstraptable']) && ctype_digit($_POST['bootstraptable'])){
            header('Content-Type: application/json; charset=utf-8');
            if($successDelete === true) echo json_encode(['success' => true, 'delete' => $id, 'index' => (int)$_POST['bootstraptable']]);
            else echo json_encode(['error' => $successDelete, 'delete' => $id, 'index' => (int)$_POST['bootstraptable']]);
            die();
        }else{
            if($successDelete === true){
                header("Location: ./?administration&deleteOK=$id");
                die();
            } else $error = $successDelete;
        }
    }elseif(isset($_GET['ko'])){ // on annule
        header("Location: ./?administration&deleteKO=$id");
        die();
    }

    $delete = getLocationByID($db, $id);
    require("../view/private/administration.delete.html.php");
}elseif(isset($_GET['addLocation'])){
    if(formIsSet()){
        $secure = secureValueFromForm();
        $isBooststrapTable = isset($_POST['bootstraptable']) && ctype_digit($_POST['bootstraptable']);
        if($isBooststrapTable) header('Content-Type: application/json; charset=utf-8');
        if($secure === true){
            $successAdd = addLocation($db, 
                                $_POST['name'], 
                                TYPES_CATEGORIES[$_POST['type']], 
                                $_POST['adresse'], 
                                $_POST['codePostal'], 
                                $_POST['country'], 
                                $_POST['url'], 
                                (float) $_POST['latitude'], 
                                (float) $_POST['longitude']);
    
            if($isBooststrapTable){
                if(!is_string($successAdd)) echo json_encode([
                    'success' => true, 
                    'add' => $successAdd,
                    'name' => $_POST['name'], 
                    'type' => TYPES_CATEGORIES[$_POST['type']], 
                    'adresse' => $_POST['adresse'], 
                    'codepostal' => $_POST['codePostal'], 
                    'ville' => $_POST['country'], 
                    'url' => $_POST['url'], 
                    'latitude' => $_POST['latitude'], 
                    'longitude' => $_POST['longitude'],
                    'index' => (int)$_POST['bootstraptable']
                ]);
                else echo json_encode(['error' => $successAdd, 'add' => -1, 'index' => (int)$_POST['bootstraptable']]);
                die();
            }else{
                if(!is_string($successAdd)){
                    header("Location: ./?administration&addOK=$successAdd");
                    die();
                } else $error = $successAdd;
            }
        }
        if($isBooststrapTable){
            echo json_encode([
                'secure' => "Données reçu incorrect", 
                'add' => $id, 
                'name' => $_POST['name'], 
                'type' => $_POST['type'], 
                'adresse' => $_POST['adresse'], 
                'codepostal' => $_POST['codePostal'], 
                'ville' => $_POST['country'], 
                'url' => $_POST['url'], 
                'latitude' => htmlspecialchars($_POST['latitude']), 
                'longitude' => htmlspecialchars($_POST['longitude']),
                'index' => (int)$_POST['bootstraptable']
            ]);
            die();
        }
    }
    require("../view/private/administration.add.html.php");
}else{
    require("../view/private/home.html.php");
}