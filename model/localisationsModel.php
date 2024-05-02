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


function updateLocationByID(PDO $db, int $id, string $nom, string $adresse, int $codepostal, string $ville, int $nb_velos, float $latitude, float $longitude) : bool | string{
    try {
        $prepare = $db->prepare("UPDATE localisations SET nom = ?, adresse = ?, codepostal = ?, ville = ?, nb_velos = ?, latitude = ?, longitude = ? WHERE id = ?");
        $prepare->execute([$nom, $adresse, $codepostal, $ville, $nb_velos, $latitude, $longitude, $id]);
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function addLocation(PDO $db, string $nom, string $adresse, int $codepostal, string $ville, int $nb_velos, float $latitude, float $longitude) : int | string{
    try {
        $prepare = $db->prepare("INSERT INTO `localisations` (`nom`, `adresse`, `codepostal`, `ville`, `nb_velos`, `latitude`, `longitude`) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $prepare->execute([$nom, $adresse, $codepostal, $ville, $nb_velos, $latitude, $longitude]);
        return (int) $db->lastInsertId();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function deleteLocationByID(PDO $db, int $id) : bool | string{
    try {
        $prepare = $db->prepare("DELETE FROM localisations WHERE id = ?");
        $prepare->execute([$id]);
        if($prepare->rowCount() < 1) return "Aucune location avec cette ID.";
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}