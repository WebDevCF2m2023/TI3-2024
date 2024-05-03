<?php
if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case "accueil" :
            include ("../view/public/homepage.view.html.php");
            break;
    
 
    }
} 


if(isset($_GET['disconnect'])){

     disconnectAdministrator();
     header("Location: ?accueil")
     die();

}

if(isset($_GET['update'])&&ctype_digit($_GET['update'])){
    $idUpdate = (int) $_GET['update'];

    if(isset(
        $_POST['nom'],
        $_POST['adresse'],
        $_POST['ville'],
        $_POST['codepostal'],
        $_POST['latitude'],
        $_POST['longitude']
    )){
        $idourdatas = $idUpdate;
        $title = htmlspecialchars(strip_tags(trim($_POST['nom'])),ENT_QUOTES);
        $description = htmlspecialchars(trim($_POST['adresse']),ENT_QUOTES);
        $ville = htmlspecialchars(strip_tags(trim($_POST['ville'])),ENT_QUOTES);
        $codepostal = htmlspecialchars(trim($_POST['codepostal']),ENT_QUOTES);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];

        $update = updateOurdatasByID($db,$idourdatas,$title,$description,$ville,$codepostal,$latitude,$longitude);

        if($update===true){
            header("Location: ?bienvenue");
            exit();
        }elseif($update===false){
            $errorUpdate = "Cet article n'a pas été modifié";
        }else{
            $errorUpdate = $update;
        }

}

$updateDatas =  getOneOurdatasByID($db, $idUpdate);

include "../view/private/admin.update.html.php";

die();
}



if(isset($_GET['insert'])){

    if(isset(
        $_POST['nom'],
        $_POST['adresse'],
        $_POST['ville'],
        $_POST['codepostal'],
        $_POST['latitude'],
        $_POST['longitude']
    )){

        $title = htmlspecialchars(strip_tags(trim($_POST['nom'])),ENT_QUOTES);
        $description = htmlspecialchars(trim($_POST['adresse']),ENT_QUOTES);
        $ville = htmlspecialchars(strip_tags(trim($_POST['ville'])),ENT_QUOTES);
        $codepostal = htmlspecialchars(trim($_POST['codepostal']),ENT_QUOTES);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];
        $insert = addNewDatas($db,$title,$description,$ville,$codepostal,$latitude,$longitude);

        if($insert === true){
            header("Location: ?bienvenue");
            exit();
           }
    
        }


    include "../view/private/admin.insert.html.php";

    die();
}

if(isset($_GET['delete'])&&ctype_digit($_GET['delete'])){
    $idDelete = (int) $_GET['delete'];
    
    if (isset($_GET['ok'])) { 
        $delete = deleteOneDataByID($db, $idDelete);
        if($delete===true){
            header("Location: ?bienvenue");
            exit();
        }elseif($delete===false){
            $error = "Problème avec cette suppression";
        }else{
            $error = $delete;
        }
    }


    $getOneData = getOneOurdatasByID($db, $idDelete);

    include "../view/private/admin.delete.view.html.php";
    
}

$ourDatas = getAllOurdatas($db); 

    include "../view/private/admin.homepage.html.php";