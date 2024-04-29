<?php

# Connexion de l'administrateur en utilisant password_verify

function administratorConnect(PDO $connectDB, string $username, string $password): bool|string
{
    $sql = "SELECT * FROM utilisateurs WHERE username = :username";
    $prepare = $connectDB->prepare($sql);

    try{
        $prepare->execute([$username]);

        if ($prepare->rowCount() === 0) {
            return "L'utilisateur n'existe pas";
        }

        $result = $prepare->fetch();

        if(password_verify($password, $result['passwd'])){
            $_SESSION['myID'] = session_id();
            $_SESSION['idutilisateurs'] = $result['idutilisateurs'];
            $_SESSION['username'] = $username;
            return true;
        } else{
            return false;
        }

    }catch(Exception $e){
        return $e->getMessage();
    }
    
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