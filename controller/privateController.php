<?php

// si on essaye de se déconnecter (administratorDisconnect nous redirige vers l'accueil)
if(isset($_GET['disconnect'])) administratorDisconnect();

// suppression
if(isset($_GET['delete'])&&ctype_digit($_GET['delete']))
{
    $idDelete = (int) $_GET['delete'];

    // si on valide
    if(isset($_GET['ok'])){
        $delete = deleteOurdatasByID($connect, $idDelete);
        if($delete===true){
            header("Location: ./");
            die;
        }
    }

    $delete = getOneOurdatasByID($connect,$idDelete);

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
        $_POST['numero'],
        $_POST['ville'],
        $_POST['codepostal'],
        $_POST['latitude'],
        $_POST['longitude']
    )){
        $id = (int) $_POST['id'];
        $nom = htmlspecialchars(strip_tags(trim($_POST['nom'])),ENT_QUOTES);
        $adresse = htmlspecialchars(trim($_POST['adresse']),ENT_QUOTES);
        $numero = htmlspecialchars(trim($_POST['numero']),ENT_QUOTES);
        $ville = htmlspecialchars(trim($_POST['ville']),ENT_QUOTES);
        $codepostal = htmlspecialchars(trim($_POST['codepostal']),ENT_QUOTES);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];
        $update = updateOurdatasByID($connect,$id,$nom,$adresse,$numero,$ville,$codepostal,$latitude,$longitude);
   
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
        $_POST['numero'],
        $_POST['ville'],
        $_POST['codepostal'],
        $_POST['latitude'],
        $_POST['longitude']
    )){

        $nom = htmlspecialchars(strip_tags(trim($_POST['nom'])),ENT_QUOTES);
        $adresse = htmlspecialchars(strip_tags(trim($_POST['adresse'])),ENT_QUOTES);
        $numero = htmlspecialchars(strip_tags(trim($_POST['numero'])),ENT_QUOTES);
        $ville = htmlspecialchars(strip_tags(trim($_POST['ville'])),ENT_QUOTES);
        $codepostal = htmlspecialchars(strip_tags(trim($_POST['codepostal'])),ENT_QUOTES);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];

        // si on récupère true, à cette fonction, il faut rédiriger vers l'accueil de l'admin, sinon affichage d'une erreur
        $insert = addOurdatas($connect,$nom,$adresse,$numero,$ville,$codepostal,$latitude,$longitude);

        if($insert===true):
            header("Location: ./?zut"); 
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


//routing pour mais page template
if(isset($_GET["p"])){
    switch($_GET["p"]){
        case "widget":
            require "../view/private/widget.html.php";
            die();
            break;
        case "blank":
            require "../view/private/blank.html.php";
            die();
            break;
        case "button":
            require "../view/private/button.html.php";
            die();
            break;
        case "chart":
            require "../view/private/chart.html.php";
            die();
            break;
        case "element":
            require "../view/private/element.html.php";
            die();
            break;
        case "form":
            require "../view/private/form.html.php";
            die();
            break;
        case "signin":
            require "../view/private/signin.html.php";
            die();
            break;
        case "signup":
            require "../view/private/signup.html.php";
            die();
            break;
        case "table":
            require "../view/private/table.html.php";
            die();
            break;
        case "typography":
            require "../view/private/typography.html.php";
            die();
            break;
        default:
            require "../view/private/404.html.php";
            die();
    }
}

// on charge toutes les données
$ourDatas = getAllOurdatas($connect);



// pas encore de données
if(is_string($ourDatas)) $message = $ourDatas;

elseif(isset($ourDatas['error'])) $error = $ourDatas['error'];

// chargement de la vue de l'accueil de l'administration
require "../view/private/admin.homepage.html.php";