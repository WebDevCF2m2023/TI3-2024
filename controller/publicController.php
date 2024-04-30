<?php

// Gère le site pour un visiteur non connecté


//JSON pour l'API
if (isset($_GET['json'])) {
    $datas = findThemAll($db);
    if (!is_string($datas)) {
        echo json_encode($datas);
    }
    exit();
}

// Si on essaie de se connecter

if (isset($_GET['net'])) {

    
    if (isset($_POST['username'], $_POST['userpsw'])) {
        
        $username = htmlspecialchars(strip_tags(trim($_POST['username'])), ENT_QUOTES);
        
        $userpsw = trim($_POST['userpsw']);
       
        $connect = connectAdministrator($db, $username, $userpwd);
      
        if ($connect === true) {
            header("Location: ./");
            exit();
        } else {
            $error = "Login et/ou mot de passe incorrect";
        }
    }
    
    include "../view/public/connect.view.html.php";
    exit();
}


// si on est sur l'accueil, on charge tous les geoloc

//Si on obtiens un string, c'est une erreur SQL, un tableau vide = pas de datas
$datas = findThemAll($db);

//appel de la vue
include "public.view.php";