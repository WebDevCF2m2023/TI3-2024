<?php

# Connexion de l'administrateur en utilisant password_verify

function administratorConnecting(PDO $net, string $user, string $psw) : bool|string 
{
    $sql="SELECT * FROM `utilisateurs`";

    $prepare = $net-prepare($sql);

    try{
        $prepare->execute([$user]);

        /* Dans le cas où l'utilisateur n'existe pas,
           on quitte sans afficher l'erreur (bonne
           pratique contre les hackeurs)*/
        
        if($prepare->rowCount()===0) return false;

        //Résulat mit dans tableau assosiatif
        $result = $prepare->fetch();

        if(password_verify($psw, $result['userpsw'])){

            $_SESSION = $result;

            unset($_SESSION['userpsw']);

            return true;
        }
        // Si le mot de pass est invalide
        return false;

    }catch(Exception $e){
        return $e->getMessage();
    }
}


# Déconnexion de l'administrateur

function administratorDisconnecting(): bool
{

    $_SESSION = [];

    if(ini_get("session.user_cookies")){
        $parameters = session_get_cookie_params();
        setcookie(session_name(), '', time() -42000,
        $parameters["path"], $parameters ["domain"],
        $parameters ["secure"], $parameters ["httponly"]);
    }
        session_destroy();

    return true;
}