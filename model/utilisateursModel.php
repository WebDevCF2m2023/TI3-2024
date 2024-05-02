<?php

# Connexion de l'administrateur en utilisant password_verify


function getUserByUsername(PDO $db, string $username) : array | bool | string{

    $sql = "SELECT * FROM utilisateurs WHERE username = ?";

    try {
        $prepare = $db->prepare($sql);
        $prepare->execute([$username]);
        if($prepare->rowCount() < 1) return false;
        return $prepare->fetch();
    } catch (Exception $e) {
        return $e->getMessage();
    }


}


function userConnect(PDO $db, string $user) : bool|string{
    $bddUser = getUserByUsername($db, $user);
    if(!is_array($bddUser)) return $bddUser;
    if(!password_verify($_POST['password'], $bddUser['passwd'])) return false;
    $_SESSION['connected'] = true;
    header("Location: ./");
    die();
}


# Déconnexion de l'administrateur

function userDisconnect(): void
{

    // Destruction des variables de SESSION (remplacement du tableau    associatif par un tableau vide)
    $_SESSION = [];

    // On met le cookie de session dans le passé, pour le navigateur    le supprime
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finalement, on détruit la session
    session_destroy();

    // Redirection (actualisation)
    header("Location: ./");
    exit();

}