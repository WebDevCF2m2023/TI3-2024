<?php
function getAlllocalisations(PDO $db) : array | string{
    try {
        $query = $db->query("SELECT * FROM localisations ORDER BY id ASC");
        $localisations = $query->fetchAll();
        $query->closeCursor();
        return $localisations;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function getlocalisationsByID(PDO $db, int $id) : array | string{
    try {
        $prepare = $db->prepare("SELECT * FROM localisations WHERE id = ?");
        $prepare->execute([$id]);
        if($prepare->rowCount() < 1) return "Aucune localisations avec cette ID.";
        return $prepare->fetch();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function deletelocalisationsByID(PDO $db, int $id) : bool | string{
    try {
        $prepare = $db->prepare("DELETE FROM `localisations` WHERE `id` = ?");
        $prepare->execute([$id]);
        if($prepare->rowCount() < 1) return "Aucune localisations avec cette ID.";
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function updatelocalisations(PDO $db, int $id, string $name, string $imgUrl, string $adresse, float $long, float $lat) : bool | string{
    try {
        $prepare = $db->prepare("UPDATE `localisations` SET `name` = ?, `adresse` = ?, `img_url` = ?, `long` = ?, `lat` = ? WHERE `id` = ?");
        $prepare->execute([$name, $adresse, $imgUrl, $long, $lat, $id]);
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function addlocalisations(PDO $db, string $name, string $imgUrl, string $adresse, float $long, float $lat) : int | string{
    try {
        $prepare = $db->prepare("INSERT INTO `localisations`(`name`, `adresse`, `img_url`, `long`, `lat`) VALUE(?,?,?,?,?)");
        $prepare->execute([$name, $adresse, $imgUrl, $long, $lat]);
        return (int) $db->lastInsertId();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}