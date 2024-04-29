<?php


// Fonction qui récupère tous les champs de `localisations`
function getAllLocations(PDO $connection): array|string
{
    $sql = "SELECT * FROM `localisations`";
    try {
        $query = $connection->query($sql);

        // Si il n'y a pas de résultat, fetchAll sera un tableau vide
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}


// Fonction qui charge tous les champs d'un élément de localisations grâce à son id
// Renvoie false en cas d'échec ou un message d'erreur sql
// Renvoie un tableau associatif si true

function getOneLocationById(PDO $db, int $id): string|bool|array
{
    $sql = "SELECT * FROM `localisations` WHERE `id` = :id";
    $stmt = $db->prepare($sql);

    $stmt->bindParam("id", $id, PDO::PARAM_INT);

    try {
        $stmt->execute();
        if ($stmt->rowCount() === 0) return false;
        $results = $stmt->fetch();
        $stmt->closeCursor();
        return $results;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
