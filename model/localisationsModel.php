<?php

function getAllLocalisations(PDO $db): array|string
{
    $sql = "SELECT * FROM localisations ORDER BY id ASC;";
    try {
        $query = $db->query($sql);
        if ($query->rowCount() === 0) return "Pas encore de datas";
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    } catch (Exception $e) {
        return ['error' => $e->getMessage()];
    }
}


function getOneLocalisations(PDO $db, int $id): array|string
{
    $sql = "SELECT * FROM localisations WHERE id = ?;";
    $prepare = $db->prepare($sql);
    $prepare->bindParam(1, $id, PDO::PARAM_INT);
    try {
        $prepare->execute();
        if ($prepare->rowCount() === 0) return "Data non existante";
        $result = $prepare->fetch();
        $prepare->closeCursor();
        return $result;
    } catch (Exception $e) {
        return ['error' => $e->getMessage()];
    }
}


function updateLocalisations(
    PDO $db,
    string $nom,
    string $adresse,
    string $codepostal,
    string $ville,
    float $latitude,
    float $longitude,
    int $id,


): bool|string {
    
    
    $prepare = $db->prepare("UPDATE localisations SET nom = ?, adresse = ?, codepostal = ?, ville = ? , latitude = ?, longitude = ? WHERE id = ?");
    $prepare->bindParam(1, $nom);
    $prepare->bindParam(2, $adresse);
    $prepare->bindParam(3, $codepostal);
    $prepare->bindParam(4, $ville);
    $prepare->bindParam(5, $latitude);
    $prepare->bindParam(6, $longitude);
    $prepare->bindParam(7, $id, PDO::PARAM_INT);
    try {
        $prepare->execute();
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}


function addLocalisations(
    PDO $db,
    string $nom,
    string $adresse,
    int $codepostal,
    string $ville,
    float $latitude,
    float $longitude,
    
): bool|string {
    $prepare = $db->prepare("INSERT INTO localisations (nom, adresse, codepostal, ville, latitude, longitude) VALUES (?,?,?,?,?,?)");
    $prepare->bindParam(1, $nom);
    $prepare->bindParam(2, $adresse);
    $prepare->bindParam(3, $codepostal);
    $prepare->bindParam(4, $ville);
    $prepare->bindParam(5, $latitude);
    $prepare->bindParam(6, $longitude);
    try {
        $prepare->execute();
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}



function deleteLocalisations(PDO $db, int $id): bool|string
{
    $prepare = $db->prepare("DELETE FROM localisations WHERE id = ?");
    $prepare->bindParam(1, $id, PDO::PARAM_INT);
    try {
        $prepare->execute();
        if ($prepare->rowCount() === 0) return "Data non existante";
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
