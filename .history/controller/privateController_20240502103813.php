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
  $delete = isset($_GET['ok']) ? deleteNosdatasByID($connect, $idDelete) : null;

  // Deletion Success Handling
  if ($delete === false) {
    header("Location: ./");
    die;
  }

  // Data Retrieval for Confirmation
  $data = getOneNosdatasByID($connect, $idDelete);

  // Display Confirmation View
  require "../view/private/admin.delete.html.php";
  die();
}




$id = isset($_GET['update']) && ctype_digit($_GET['update']) ? (int) $_GET['update'] :null;


$isFormSubmitted = isset($_POST['id'], $_POST['nom'], $_POST['adresse'], $_POST['codepostal'], $_POST['latitude'], $_POST['longitude']);

$nom = $isFormSubmitted ? htmlspecialchars(strip_tags(trim($_POST['nom'])), ENT_QUOTES) : null;
$adresse = $isFormSubmitted ? htmlspecialchars(trim($_POST['adresse']), ENT_QUOTES) : null;
$codepostal = $isFormSubmitted ? (int) $_POST['codepostal'] : null;
$latitude = $isFormSubmitted ? (float) $_POST['latitude'] : null;
$longitude = $isFormSubmitted ? (float) $_POST['longitude'] : null;

if ($isFormSubmitted) {
  $update = updateNosdatasByID($connect, $id, $nom, $adresse, $codepostal, $latitude, $longitude);
  if ($update === false) {
    header("Location: ./");
    die;
  }
}
if( $id != null){
    $update = getOneNosdatasByID($connect,$id);
//var_dump($update,$_POST);
    // appel de la vue d'update
    require "../view/private/admin.update.html.php";
    die();
}

// insertion
if (isset($_GET['insert'])) {
    // Vérification des champs du formulaire
    $nom = isset($_POST['nom']) ? strip_tags(trim($_POST['nom'])) : null;
    $adresse = isset($_POST['adresse']) ? trim($_POST['adresse']) : null;
    $codepostal = isset($_POST['codepostal']) ? trim($_POST['codepostal']) : null;
    $latitude = isset($_POST['latitude']) ? (float) $_POST['latitude'] : null;
    $longitude = isset($_POST['longitude']) ? (float) $_POST['longitude'] : null;

    // Insertion des données si tous les champs sont présents
    if ($nom && $adresse && $codepostal && $latitude && $longitude) {
        $insert = addNosdatas($connect, $nom, $adresse, $codepostal, $latitude, $longitude);
        $resultat = $insert === true ? header("Location: ./") : $error = $insert;
    } else {
        $resultat = 'Formulaire incomplet';
    }

    // Affichage de la vue d'insertion
    require "../view/private/admin.insert.html.php";

    // Redirection ou affichage d'erreur
    exit($resultat);
}

// on charge toutes les données
$NosDatas = getAllNosdatas($connect);



// pas encore de données
if(is_string($NosDatas)) $message = $NosDatas;

elseif(isset($NosDatas['error'])) $error = $NosDatas['error'];

// chargement de la vue de l'accueil de l'administration
require "../view/private/admin.homepage.html.php";