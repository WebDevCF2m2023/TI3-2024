<?php

# Connexion de l'administrateur en utilisant password_verify



function administratorConnect(PDO $connectDB, string $username) : bool|string{
    $bddUser = getUserByUsername($connectDB, $username);
    if(!is_array($bddUser)) return $bddUser;
    if(!password_verify($_POST['password'], $bddUser['password'])) return false;
    $_SESSION['connected'] = true;
    header("Location: /");
    die();
}


# Déconnexion de l'administrateur

function administratorDisconnect(): void
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