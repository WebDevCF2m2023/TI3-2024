<?php

// si on essaye de se déconnecter (administratorDisconnect nous redirige vers l'accueil)


// Disconnecting Administrator
if (isset($_GET['disconnect'])) {
  administratorDisconnect();
}

// Data Deletion
if (isset($_GET['delete']) && ctype_digit($_GET['delete'])) {
  $idDelete = (int)$_GET['delete'];

  // Deletion Confirmation
  $delete = isset($_GET['ok']) ? deleteOurdatasByID($connect, $idDelete) : null;

  // Deletion Success Handling
  if ($delete === true) {
    header("Location: ./");
    die;
  }

  // Data Retrieval for Confirmation
  $data = getOneOurdatasByID($connect, $idDelete);

  // Display Confirmation View
  require "../view/private/admin.delete.html.php";
  die();
}


// modification
if(isset($_GET['update'])&&ctype_digit($_GET['update'])){

    $id = (int) $_GET['update'];

    // si le formulaire est envoyé
    if(isset(
        $_POST['id'],
        $_POST['nom'],
        $_POST['adresse'],
        $_POST['codepostal'],
        $_POST['latitude'],
        $_POST['longitude']
    )){
        $id = (int) $_POST['id'];
        $nom = htmlspecialchars(strip_tags(trim($_POST['nom'])),ENT_QUOTES);
        $adresse = htmlspecialchars(trim($_POST['adresse']),ENT_QUOTES);
        $codepostal = (int) $_POST['codepostal'];
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];
        $update = updateOurdatasByID($connect,$id,$nom,$adresse,$codepostal,$latitude,$longitude);
        if($update===true){
            // redirection
            header("Location: ./");
            die;
        }
        //var_dump($update);
    }
    
    // Appel de la fonction qui charge une donnée par son id
    $update = getOneOurdatasByID($connect,$id);
    //var_dump($update,$_POST);
    // appel de la vue d'update
    require "../view/private/admin.update.html.php";
    die();
}

// insertion
if(isset($_GET['insert'])){

    // si le formulaire est envoyé
    if(isset(
        $_POST['nom'],
        $_POST['adresse'],
        $_POST['codepostal'],
        $_POST['latitude'],
        $_POST['longitude']
    )){
    
        $nom = strip_tags(trim($_POST['nom']));
        $adresse = trim($_POST['adresse']);
        $codepostal = trim( $_POST['codepostal']);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];

        // si on récupère true, à cette fonction, il faut rédiriger vers l'accueil de l'admin, sinon affichage d'une erreur
        $insert = addOurdatas($connect,$nom,$adresse ,$codepostal,$latitude,$longitude);

        if($insert===true):
            header("Location: ./"); 
            exit();
        else:
            $error = $insert;
        endif;
    }

    // appel de la vue d'insertion
    require "../view/private/admin.insert.html.php";
    //var_dump($_POST);
    exit();
}

// on charge toutes les données
$ourDatas = getAllOurdatas($connect);



// pas encore de données
if(is_string($ourDatas)) $message = $ourDatas;

elseif(isset($ourDatas['error'])) $error = $ourDatas['error'];

// chargement de la vue de l'accueil de l'administration
require "../view/private/admin.homepage.html.php";