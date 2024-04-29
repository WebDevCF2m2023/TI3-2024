<?php

# Connexion de l'administrateur en utilisant password_verify


function connectAdministrator(PDO $con, string $user, string $password) : bool|string
{
    // nous allons récupérez les valeurs utiles pour l'utilisateur via $user uniquement
    $sql="SELECT * FROM `utilisateurs` WHERE username = ?";
    // requête préparée car il y a des (une) entrées utilisateurs
    $prepare = $con->prepare($sql);

    try{
        $prepare->execute([$user]);

        // cet utilisateur n'existe pas, on quitte sans indiquer une erreur qui pourrait être une piste pour un hacker
        if($prepare->rowCount()===0) return false;

        // on met le résultat dans un tableau associatif
        $result = $prepare->fetch();

        // on va vérifiez la validité du mot de passe
        if(password_verify($password,$result['passwd'])){
            // on met dans la session les variables récupérées par la requête
            $_SESSION = $result;
            // suppression de la variable inutile de la session
            unset($_SESSION['passwd']);
            // on est connecté
            return true;
        }
        // mot de passe non valide
        return false;

    }catch(Exception $e){
        return $e->getMessage();
    }
}


# Déconnexion de l'administrateur


function disconnectAdministrator(): bool
{


    // Détruit toutes les variables de session
    $_SESSION = [];

    // Si vous voulez détruire complètement la session, effacez également
    // le cookie de session.
    // Note : cela détruira la session et pas seulement les données de session !
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    //  on détruit la session 
    session_destroy();

    return true;
}