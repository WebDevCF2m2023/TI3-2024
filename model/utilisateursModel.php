<?php

# administrator connection
function connection_admin(PDO $db, string $username, string $password){
    try {
        $sql = "SELECT `passwd` FROM `localisations` WHERE `username`=?";
        $prepare = $db->prepare($sql);
        $prepare->execute([$username]);
        $user = $prepare->fetch();
        $prepare->closeCursor();
        if (!$user || !password_verify($password, $user["passwd"]))return "username ou mot de passe incorrect";
        $_SESSION["admin"] = true;
    }catch (Exception $e){
        return $e->getMessage();
    }
}

# Déconnexion de l'administrateur