<?php

# Connexion de l'administrateur en utilisant password_verify
function administratorConnect(PDO $connect, string $login, string $password): bool|string
{
    $sql= "SELECT * FROM utilisateurs WHERE username = ?";
    $prepare = $connect->prepare($sql);
    
    try{
        $prepare->execute([$login]);
        if($prepare->rowCount()==0) return "Utilisateur inconnu";


        $result = $prepare->fetch();

        if(password_verify($password, $result['passwd'])){

            $_SESSION['idadministrator'] = $result['idadministrator'];
            $_SESSION['login'] = $login;
            return true;
        }else{
            return false;
        }

    }catch(Exception $e){
        return $e->getMessage();
    }
    
}
# Déconnexion de l'administrateur

function administratorDisconnect(): void
{

    $_SESSION = [];

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();

    header("Location: ./");
    exit();

}