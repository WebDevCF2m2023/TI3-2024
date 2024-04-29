<?php

function getAllLocations(PDO $db) : array | string{
    try {
        $query = $db->query("SELECT * FROM localisations ORDER BY id ASC");
        $locations = $query->fetchAll();
        $query->closeCursor();
        return $locations;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function getLocationByID(PDO $db, int $id) : array | string{
    try {
        $prepare = $db->prepare("SELECT * FROM localisations WHERE id = ?");
        $prepare->execute([$id]);
        if($prepare->rowCount() < 1) return "Aucune location avec cette ID.";
        return $prepare->fetch();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function deleteLocationByID(PDO $db, int $id) : bool | string{
    try {
        $prepare = $db->prepare("DELETE FROM `localisations` WHERE `id` = ?");
        $prepare->execute([$id]);
        if($prepare->rowCount() < 1) return "Aucune location avec cette ID.";
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function updateLocation(PDO $db, int $id, string $nom, string $adresse, int $numero,string $ville,int $codepostal, float $latitude, float $longitude) : bool | string{
    try {
        $prepare = $db->prepare("UPDATE `localisations` SET `nom` = ?, `adresse` = ?, `numero` = ?,`ville` = ?,`codepostal` = ?, `latitude` = ?, `longitude` = ? WHERE `id` = ?");
        $prepare->execute([$nom, $adresse, $numero,$ville,$codepostal, $latitude, $longitude, $id]);
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function addLocation(PDO $db, string $nom, string $adresse, int $numero,string $ville,int $codepostal, float $latitude, float $longitude) : int | string{
    try {
        $prepare = $db->prepare("INSERT INTO `localisations`(`nom`, `adresse`, `numero`,`ville`,`codepostal`, `latitude`, `longitude`) VALUE(?,?,?,?,?,?,?)");
        $prepare->execute([$nom, $adresse, $numero,$ville,$codepostal, $latitude, $longitude]);
        return (int) $db->lastInsertId();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
