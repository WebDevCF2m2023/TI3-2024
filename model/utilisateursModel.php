<?php


/**
 * @return bool 
 * @return array 
 * @return string
 */
function getUserByUsername(PDO $connect, string $username) : array | bool | string{

    $sql = "SELECT * FROM utilisateurs WHERE username = ?";

    try {
        $prepare = $connect->prepare($sql);
        $prepare->execute([$username]);
        if($prepare->rowCount() < 1) return false;
        return $prepare->fetch();
    } catch (Exception $e) {
        return $e->getMessage();
    }

    return false;
}

function administratorConnect(PDO $connect, string $user) : bool|string{
    $bddUser = getUserByUsername($connect, $user);
    if(!is_array($bddUser)) return $bddUser;
    if(!password_verify($_POST['password'], $bddUser['passwd'])) return false;
    $_SESSION['connected'] = true;
    header("Location: ./?administration");
    die();
}

function administratorDisconnect(){

    $_SESSION = array();


    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    

    session_destroy();
    header("Location: /");
    die();
}
