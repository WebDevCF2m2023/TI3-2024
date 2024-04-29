<?php
function getAllLocations(PDO $connect) : array | string{
    try {
        $query = $connect->query("SELECT * FROM localisations ORDER BY id ASC");
        $locations = $query->fetchAll();
        $query->closeCursor();
        return $locations;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function getLocationByID(PDO $connect, int $id) : array | string{
    try {
        $prepare = $connect->prepare("SELECT * FROM localisations WHERE id = ?");
        $prepare->execute([$id]);
        if($prepare->rowCount() < 1) return "Aucune location avec cette ID.";
        return $prepare->fetch();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function deleteLocationByID(PDO $connect, int $id) : bool | string{
    try {
        $prepare = $connect->prepare("DELETE FROM `localisations` WHERE `id` = ?");
        $prepare->execute([$id]);
        if($prepare->rowCount() < 1) return "Aucune location avec cette ID.";
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function updateLocation(PDO $connect, int $id, string $nom, string $adresse, string $codepostal, string $ville, float $latitude, float $longitude) : bool | string{
    try {
        $prepare = $connect->prepare("UPDATE `localisations` SET `nom` = ?, `adresse` = ?, `codepostal` = ?, `ville` = ?, `latitude` = ?, `longitude` = ? WHERE `id` = ?");
        $prepare->execute([$nom, $adresse, $codepostal, $ville, $latitude, $longitude, $id]);
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function addLocation(PDO $connect, int $id, string $nom, string $adresse, string $codepostal, string $ville, float $latitude, float $longitude) : int | string{
    try {
        $prepare = $connect->prepare("INSERT INTO `localisations`(`nom`, `adresse`, `codepostal`, `ville`, `latitude`, `longitude`) VALUE(?,?,?,?,?,?)");
        $prepare->execute([$nom, $adresse, $codepostal, $ville, $latitude, $longitude]);
        return (int) $connect->lastInsertId();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}