<?php

# administrator connection
function connection_admin(PDO $db, string $username, string $password):string|true{
    try {
        $sql = "SELECT `passwd` FROM `utilisateurs` WHERE `username`=?";
        $prepare = $db->prepare($sql);
        $prepare->execute([$username]);
        $user = $prepare->fetch();
        $prepare->closeCursor();
        if (!$user || !password_verify($password, $user["passwd"]))return "username ou mot de passe incorrect";
        $_SESSION["admin"] = true;
        return true;
    }catch (Exception $e){
        return $e->getMessage();
    }
}

# Déconnexion de l'administrateur
function logout_admin(){
    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();
}