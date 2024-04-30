<?php




function administratorConnect(PDO $connectDB, string $login, string $password): bool|string
{

    $sql = "SELECT * FROM utilisateurs WHERE username = ?";
    $prepare = $connectDB->prepare($sql);

    try {

        $prepare->execute([$login]);

        if ($prepare->rowCount() == 0) return "Utilisateur inconnu";

        $result = $prepare->fetch();


        if (password_verify($password, $result['passwd'])) {


            $_SESSION['myID'] = session_id();
            $_SESSION['idutilisateurs '] = $result['idutilisateurs'];
            $_SESSION['login'] = $login;
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function administratorDisconnect(): void
{


    $_SESSION = [];


    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }


    session_destroy();


    header("Location: ./");
    exit();
}
