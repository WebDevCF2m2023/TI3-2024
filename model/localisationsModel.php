<?php

/**
 * @return array All locations
 * @return string if a error is throw
 */
function getAllLocations(PDO $db, int $offset = null, int $limit = null) : array | string{
    try {
        $sql = "SELECT * FROM `localisations` ORDER BY id DESC" . ($offset !== null && $limit !== null ? " LIMIT $offset, $limit" : "");
        $query = $db->query($sql);
        $locations = $query->fetchAll();
        $query->closeCursor();
        return $locations;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

/**
 * @return int total of locations
 * @return string if a error is throw
 */
function getCountTotalLocations(PDO $db) : int | string{
    try {
        $sql = "SELECT COUNT(*) as `total` FROM `localisations`";
        $query = $db->query($sql);
        $total = $query->fetch();
        $query->closeCursor();
        return (int) $total['total'];
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

/**
 * @return array the location
 * @return string if a error is throw
 */
function getLocationByID(PDO $db, int $id) : array | string{
    try {
        $prepare = $db->prepare("SELECT * FROM `localisations` WHERE id = ?");
        $prepare->execute([$id]);
        if($prepare->rowCount() < 1) return "Aucune localisation avec cette ID.";
        $location = $prepare->fetch();
        $prepare->closeCursor();
        return $location;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

/**
 * @return bool true if success
 * @return string if a error is throw
 */
function deleteLocationByID(PDO $db, int $id) : bool | string{
    try {
        $prepare = $db->prepare("DELETE FROM `localisations` WHERE `id` = ?");
        $prepare->execute([$id]);
        if($prepare->rowCount() < 1) return "Aucune localisation avec cette ID.";
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

/**
 * @return bool true if success
 * @return string if a error is throw
 */
function updateLocation(PDO $db, int $id, string $name, string $type, string $adresse, string $codePostal, string $country, string $url, float $lat, float $long) : bool | string{
    try {
        $prepare = $db->prepare("UPDATE `localisations` SET `nom` = ?, `type` = ?, `adresse` = ?, `codepostal` = ?, `ville` = ?, `url` = ?, `latitude` = ?, `longitude` = ? WHERE `id` = ?");
        $prepare->execute([$name, $type, $adresse, $codePostal, $country, $url, $lat, $long, $id]);
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

/**
 * @return int last id inserted in db
 * @return string if a error is throw
 */
function addLocation(PDO $db, string $name, string $type, string $adresse, string $codePostal, string $country, string $url, float $lat, float $long) : int | string{
    try {
        $prepare = $db->prepare("INSERT INTO `localisations`(`nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`) VALUE(?,?,?,?,?,?,?,?)");
        $prepare->execute([$name, $type, $adresse, $codePostal, $country, $url, $lat, $long]);
        return (int) $db->lastInsertId();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}