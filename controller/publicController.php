<?php


// si on essaie de se connecter
if(isset($_GET['connect'])){

    // si on clique sur connexion
    if(isset($_POST['username'],$_POST['passwd'])){

        // on met dans une variable la tentative de connexion
        $connection = administratorConnect($connect,$_POST['username'],$_POST['passwd']);


        if($connection === true){
            header("Location: ./");
            die();
        }

    }

    // appel de la vue
    require "../view/public/connect.html.php";
    exit();
}

if(isset($_GET['loadDatas'])){
    $lesVilles = getAllLocalisations($connect);
    echo json_encode($lesVilles);
    exit();
}


require "../view/public/homepage.html.php";