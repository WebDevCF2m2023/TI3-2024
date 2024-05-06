<?php

# Connexion de l'administrateur en utilisant password_verify


function getUserByUsername(PDO $db, string $username) : array | bool | string{
    // Sanitize user input
    $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

    $sql = "SELECT * FROM utilisateurs WHERE username = ?";

    try {
        $prepare = $db->prepare($sql);
        $prepare->execute([$username]);
        if($prepare->rowCount() < 1) return false;
        return $prepare->fetch();
    } catch (Exception $e) {
        // Log the error message and return a generic error message
        error_log($e->getMessage());
        return "An error occurred. Please try again.";
    }
}


function userConnect(PDO $db, string $user) : bool|string{
    // Sanitize user input
    $user = htmlspecialchars($user, ENT_QUOTES, 'UTF-8');

    $bddUser = getUserByUsername($db, $user);
    if(!is_array($bddUser)) return $bddUser;

    // Sanitize password input and use password_verify for secure comparison
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
    if(!password_verify($password, $bddUser['passwd'])) return false;

    // Regenerate session ID to prevent session fixation attacks
    session_regenerate_id(true);

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