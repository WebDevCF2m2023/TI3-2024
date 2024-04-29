<?php

// si on veut se déconnecter
if(isset($_GET['disconnect'])){
    // on se déconnecte
    disconnectAdministrator();
    header("Location: ./");
    exit();
}

// si on veut créer un lieu
if(isset($_GET['create'])){

    // si on a cliqué sur insérer
    if(isset(
        $_POST['rue'],
        $_POST['ville'],
        $_POST['codepostal'],
        $_POST['latitude'],
        $_POST['longitude']
    )){

       $rue = htmlspecialchars(strip_tags(trim($_POST['rue'])),ENT_QUOTES);
       $codepostal = htmlspecialchars(strip_tags(trim($_POST['codepostal'])),ENT_QUOTES);
       $ville = htmlspecialchars(trim($_POST['ville']),ENT_QUOTES);
       $latitude = (float) $_POST['latitude'];
       $longitude = (float) $_POST['longitude'];


       $insert = insertOneGeolocByID($db,$rue,$codepostal,$ville,$latitude, $longitude);

       if($insert === true){
        header("Location: ./");
        exit();
       }

    }

    // chargement de la vue
    include "../view/private/admin.insert.view.html.php";
    exit();
}

// si on cliqué sur supprimer un lieu
if(isset($_GET['delete'])&&ctype_digit($_GET['delete'])){

    // conversion en int
    $idDelete = (int) $_GET['delete'];

    // si on a validé la suppression
    if(isset($_GET['ok'])){
        $delete = deleteOneGeolocByID($db, $idDelete);
        if($delete===true){
            header("Location: ./");
            exit();
        }elseif($delete===false){
            $error = "Problème avec cette suppression";
        }else{
            $error = $delete;
        }
    }

    // chargement de l'article pour la suppression
    $getOneGeoloc = getOneGeolocByID($db, $idDelete);

    // chargement de la vue
    include "../view/private/admin.delete.view.html.php";
    exit();
}

// si on a cliqué sur update et que vous n'acceptez que les chiffres 123456789 dans le string $_GET['update']
if(isset($_GET['update'])&&ctype_digit($_GET['update'])){

    // conversion en int
    $idUpdate = (int) $_GET['update'];

    // si on a modifié le formulaire (non obligatoire de vérifier tous les champs, mais dans le isset la virgule équivaut à &&)
    if(isset(
             $_POST['rue'],
             $_POST['ville'],
             $_POST['codepostal'],
             $_POST['latitude'],
             $_POST['longitude']
    )){

            $id = $idUpdate;
            $rue = htmlspecialchars(strip_tags(trim($_POST['rue'])),ENT_QUOTES);
            $codepostal = htmlspecialchars(strip_tags(trim($_POST['codepostal'])),ENT_QUOTES);
            $ville= htmlspecialchars(trim($_POST['ville']),ENT_QUOTES);
            $latitude = (float) $_POST['latitude'];
            $longitude = (float) $_POST['longitude'];

            // fonction qui update la mise à jour
            $update = updateOneGeolocByID($db,$id,$rue,$codepostal,$ville,$latitude,$longitude);
            //var_dump($update);
            // update ok
            if($update===true){
                header("Location: ./");
                exit();
            }elseif($update===false){
                $errorUpdate = "Cet article n'a pas été modifié";
            }else{
                $errorUpdate = $update;
            }
    }
        
    


    // chargement de l'article pour l'update
    $getOneGeoloc = getOneGeolocByID($db, $idUpdate);
    //var_dump($getOneGeoloc);

    // chargement de la vue
    include "../view/private/admin.update.view.html.php";
    exit();
}


// si on est sur l'accueil chargement de tous les `geoloc`
$datas = getAllGeoloc($db); // on obtient un string (Erreur SQL), un tableau vide (Pas de datas), un tableau non vide (On a des datas)
// appel de la vue de l'accueil de l'admin
include "../view/private/admin.homepage.view.html.php";