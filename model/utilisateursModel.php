<?php

# Connexion de l'administrateur en utilisant password_verify
function connectAdministrator(PDO $connect, string $user, string $password): bool|string
{
    // On récupère les valeurs utiles pour l'utilisateur via $user uniquement
    $sql = "SELECT * FROM `utilisateurs` WHERE username = ?";

    // on utilise une requête préparée car il y'a une entrée utilisateur
    $prepare = $connect->prepare($sql);

    try {
        $prepare->execute([$user]);

        // Si l'utilisateur n'existe pas, on quitte sans indiquer une erreur 
        if ($prepare->rowCount() === 0) return false;

        //On mets le résultat dans un tableau associatif
        $result = $prepare->fetch();

        // On vérifie la validité du mot de passe
        if (password_verify($password, $result['passwd'])) {
            
            // On met dans la session les variables récupérées dans la requête
            $_SESSION = $result;
            // on supprime la variable inutile de la session
            unset($_SESSION['passwd']);

            // si on est connecté, on renvoie true
            return true;
        }
        // Si le mot de passe est invalide, on renvoie false
        return false;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}


# Déconnexion de l'administrateur