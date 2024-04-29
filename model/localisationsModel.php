<?php


function getAllLocals (PDO $db) {

    $sql = "SELECT *
            FROM `localisations`
            ORDER BY `id`";

    try{
        $query = $db->query($sql);
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }catch(Exception) {
        $errorMessage = "Sorry, couldn't get local info";
        return $errorMessage;
    }
}

function getOneItemById (PDO $db, int $id) : array | string {
    $sql = 'SELECT *
            FROM `localisations`
            WHERE `id` = ?';

$stmt = $db->prepare($sql);
try {
    $stmt->execute([$id]);
    $result = $stmt->fetch();
    return $result;
}catch(Exception $e) {
    return $e->getMessage();
}
}

function insertNewItem (PDO $db, string $nom, string $type, string $add, int $code, string $ville, string $url, float $lat, float $lon) {

    $cleanedName = htmlspecialchars(strip_tags(trim($nom)));
    $cleanedType = htmlspecialchars(strip_tags(trim($type)));
    $cleanedAdd = htmlspecialchars(strip_tags(trim($add)));
    $cleanedCode = htmlspecialchars(strip_tags(trim($code)));
    $cleanedVille = htmlspecialchars(strip_tags(trim($ville)));
    $cleanedUrl = htmlspecialchars(strip_tags(trim($url)));
    $cleanedLat = htmlspecialchars(strip_tags(trim($lat)));
    $cleanedLon = htmlspecialchars(strip_tags(trim($lon)));
    
    $sql = "INSERT INTO `localisations` (`nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);

    $stmt->bindValue(1, $cleanedName);
    $stmt->bindValue(2, $cleanedType);
    $stmt->bindValue(3, $cleanedAdd);
    $stmt->bindValue(4, $cleanedCode);
    $stmt->bindValue(5, $cleanedVille);
    $stmt->bindValue(6, $cleanedUrl);
    $stmt->bindValue(7, $cleanedLat);
    $stmt->bindValue(8, $cleanedLon);
    
    
    try {
        $stmt->execute();
        if($stmt->rowCount()===0) return false;
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
    
}

function updateItemById (PDO $db, string $nom, string $type, string $add, int $code, string $ville, string $url, float $lat, float $lon, $id) {

    $cleanedName = htmlspecialchars(strip_tags(trim($nom)));
    $cleanedType = htmlspecialchars(strip_tags(trim($type)));
    $cleanedAdd = htmlspecialchars(strip_tags(trim($add)));
    $cleanedVille = htmlspecialchars(strip_tags(trim($ville)));
    $cleanedUrl = htmlspecialchars(strip_tags(trim($url)));
    $cleanedLat = htmlspecialchars(strip_tags(trim($lat)));
    $cleanedLon = htmlspecialchars(strip_tags(trim($lon)));
    
    $sql = "UPDATE `localisations` 
            SET `nom`= ?,
                `type`= ?,
                `adresse`= ?,
                `codepostal`= ?,
                `ville`= ?,
                `url`= ?,
                `latitude`= ?,
                `longitude`= ?
                 WHERE `id` = ?";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $cleanedName);
    $stmt->bindValue(2, $cleanedType);
    $stmt->bindValue(3, $cleanedAdd);
    $stmt->bindValue(4, $code);
    $stmt->bindValue(5, $cleanedVille);
    $stmt->bindValue(6, $cleanedUrl);
    $stmt->bindValue(7, (float) $cleanedLat);
    $stmt->bindValue(8, (float) $cleanedLon);
    $stmt->bindValue(9, $id, PDO::PARAM_INT);
    
    try {
        $stmt->execute();
        if($stmt->rowCount()===0) return false;
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
    
}

function deleteItemFromListByID(PDO $db, int $item) : bool | string {
    $sql = "DELETE FROM `localisations`
            WHERE `id` = ?";
    
    $stmt = $db->prepare($sql);
    try{
        $stmt->execute([$item]);
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}