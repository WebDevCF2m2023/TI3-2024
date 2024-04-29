<?php
if($_SESSION["showGreeting"] === true) {
    include("../view/public/welcomeView.php");
}else if(isset($_GET["page"])) {
    switch($_GET["page"]) {
        case "home" :
            $title = "Carte Interactive";
            include("../view/public/homeView.php");
            break;
            case "login" :
                $title = "Connectez-vous";
                include("../view/public/loginView.php");
                break;  
                case "adminHome" :
                    $title = "Ajoute un lieu à la table";
                    include("../view/private/adminView.php");
                    break;                                    
                        
                        default :
                        $title = "Page Introuvable";
                        include("../view/public/error404View.php");         
                    }
                }else if (isset($_GET["logout"])) {
                    include_once("../model/logoutModel.php");
                    
                }else {
                    $title = "Bienvenue à mon Projet";
                    include("../view/public/homeView.php");
                }