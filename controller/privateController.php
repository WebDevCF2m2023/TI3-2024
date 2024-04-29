<?php

// si on veut se déconnecter

if (isset($_GET['disconnect'])) {
    // on se déconnecte
    disconnectAdministrator();
    header("Location: ./");
    exit();
}

//Si on veut créer un lieu
if (isset($_GET['create'])) {

    //Si on a cliqué sur insérer
    if (isset(
        $_POST['nom'],
        $_POST['rue'],
        $_POST['codepostal'],
        $_POST['telephone'],
        $_POST['url'],
        $_POST['latitude'],
        $_POST['longitude']
    )) {
        $title = htmlspecialchars(strip_tags(trim($_POST['nom'])), ENT_QUOTES);
        $adresse = htmlspecialchars(trim($_POST['rue']), ENT_QUOTES);
        $codePostal = htmlspecialchars(trim($_POST['codepostal']), ENT_QUOTES);
        $telephone = htmlspecialchars(trim($_POST['telephone']), ENT_QUOTES);
        $url = htmlspecialchars(trim($_POST['url']), ENT_QUOTES);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];

        $insert = insertOneLocation($db, $title, $adresse,$codePostal,$telephone,$url,$latitude, $longitude);

        if ($insert === true) {
            header("Location: ./");
            exit();
        }
    }

    //chargement de la vue
    include "../view/private/admin.insert.view.html.php";
    exit();
}