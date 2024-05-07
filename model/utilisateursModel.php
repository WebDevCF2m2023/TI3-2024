<?php

# Connexion de l'administrateur en utilisant password_verify
function attemptUserLogin (PDO $db, string $name, string $pass) : bool | string {
    
    $sql = "SELECT *
            FROM `utilisateurs`
            WHERE `username` = ?";

$stmt = $db->prepare($sql);
$stmt->bindValue(1, $name);

try {
    $stmt->execute();
    if($stmt->rowCount()===0) return false;
    $result = $stmt->fetch();
    
    
    if (password_verify($pass, $result['passwd'])) {
        
        $_SESSION = $result;
        unset($_SESSION['password']);
        $_SESSION['monID'] = session_id();
        $_SESSION['pageCount'] = 1;       
        return true;
        
    }else{
        return false;
    }
}catch (Exception $e) {
    return $e->getMessage();
} 
}

# Déconnexion de l'administrateur