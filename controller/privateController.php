<?php


if(isset($_GET['disconnect'])) administratorDisconnect();

if(isset($_GET['insert'])){

    
    if(isset(
        $_POST['nom'],
        $_POST['adresse'],
        $_POST['codepostal'],
        $_POST['ville'],
        $_POST['latitude'],
        $_POST['longitude']
    )){

        $nom = strip_tags(trim($_POST['nom']));
        $adresse = trim($_POST['adresse']);
        $codepostal = (float) $_POST['codepostal'];
        $ville = trim($_POST['ville']);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];

        
        $insert = addLocalisations($connect,$nom,$adresse,$codepostal,$ville,$latitude,$longitude);
        if($insert === true){
            header("Location: ./");
            exit();
        }else{
            $error = $insert;
        }
    }

   
    require "../view/private/admin.insert.html.php";
    
    exit();
}

if(isset($_GET['update'])&&ctype_digit($_GET['update'])){

    $idUpdate = (int) $_GET['update'];

    
    if(isset(
        $_POST['nom'],
        $_POST['adresse'],
        $_POST['codepostal'],
        $_POST['ville'],
        $_POST['latitude'],
        $_POST['longitude'],
        $_POST['id']
    )){

        $nom = strip_tags(trim($_POST['nom']));
        $adresse = trim($_POST['adresse']);
        $codepostal	 = (int) $_POST['codepostal'];
        $ville = trim($_POST['ville']);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];
        $id = (int) $_POST['id'];

      
        $update = updateLocalisations($connect,$nom,$adresse,$ville,$codepostal,$latitude,$longitude,$id);
        if($update === true){
            header("Location: ./");
            exit();
        }else{
            $error = $update;
        }
    }

    

    $data = getOneLocalisations($connect,$idUpdate);
    if(is_string($data)) $message = $data;
    elseif(isset($data['error'])) $error = $data['error'];
    
    require "../view/private/admin.update.html.php";
    
    exit();

}


if(isset($_GET['delete'])&&ctype_digit($_GET['delete'])){

    $idDelete = (int) $_GET['delete'];

    if(isset($_GET['confirm'])){

        $delete = deleteLocalisations($connect,$idDelete);
        if($delete === true){
            header("Location: ./");
            exit();
        }else{
            $error = $delete;
        }
    }
    $data = getOneLocalisations($connect,$idDelete);
    if(is_string($data)) $message = $data;
    elseif(isset($data['error'])) $error = $data['error'];
    
    require "../view/private/admin.delete.html.php";
    exit();
}


$lesVilles = getAllLocalisations($connect);

if(is_string($lesVilles)) $message = $lesVilles;

elseif(isset($lesVilles['error'])) $error = $lesVilles['error'];


require "../view/private/admin.homepage.html.php";