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
