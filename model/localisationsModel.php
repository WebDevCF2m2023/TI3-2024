<?php

// celui-ci contient toutes les fonctions liées à l'ajout, à la modification ou à la suppression des lieux (et à leur affichage, bien sûr)
// Pas besoin d'étiqueter les fonctions car leurs noms disent tout

function getAllMaps(PDO $db) : array | string {
    $sql = "SELECT * 
            FROM `localisations` 
            ORDER BY `id` DESC";

try{
    $query = $db->query($sql);
    $result = $query->fetchAll();
    $query->closeCursor();
    return $result;
}catch(Exception) {
    $errorMessage = "Sorry, couldn't get map info";
    return $errorMessage;
}
}

function getMapsByType (PDO $db,string $type) : array | string {
    $sql = "SELECT * 
            FROM `localisations`
            WHERE `type` = ? 
            ORDER BY `id` DESC";
$stmt = $db->prepare($sql);
try{
    $stmt->execute([$type]);
    $result = $stmt->fetchAll();
    
    return $result;
}catch(Exception) {
    $errorMessage = "Sorry, couldn't get map info";
    return $errorMessage;
}
}

function deleteItemFromMapByID(PDO $db, int $item) : bool | string {
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

function addItemToMap (PDO $db, string $name, string $type, string $add, string $code, string $ville, string $url, float $lat, float $lon) : bool | string {
    $cleanedName = htmlspecialchars(strip_tags(trim($name)), ENT_QUOTES);
    $cleanedType = htmlspecialchars(strip_tags(trim($type)), ENT_QUOTES);
    $cleanedAdd = htmlspecialchars(strip_tags(trim($add)), ENT_QUOTES);
    $cleanedCode = htmlspecialchars(strip_tags(trim($code)));
    $cleanedVille = htmlspecialchars(strip_tags(trim($ville)), ENT_QUOTES);
    $cleanedUrl = filter_var($url, FILTER_SANITIZE_URL);
    $cleanedLat = htmlspecialchars(strip_tags(trim($lat)));
    $cleanedLon = htmlspecialchars(strip_tags(trim($lon)));

    
    $sql = "INSERT INTO `localisation`(`nom`, `type`, `adresse`, `codepostal`, `ville`, `url`, `latitude`, `longitude`)  
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

                            
function updateItemById (PDO $db, string $name, string $type, string $add, string $code, string $ville, string $url, float $lat, float $lon, int $id) : bool | string {
    $cleanedName = htmlspecialchars(strip_tags(trim($name)), ENT_QUOTES);
    $cleanedType = htmlspecialchars(strip_tags(trim($type)), ENT_QUOTES);
    $cleanedAdd = htmlspecialchars(strip_tags(trim($add)), ENT_QUOTES);
    $cleanedCode = htmlspecialchars(strip_tags(trim($code)));
    $cleanedVille = htmlspecialchars(strip_tags(trim($ville)), ENT_QUOTES);
    $cleanedUrl = filter_var($url, FILTER_SANITIZE_URL);
    $cleanedLat = htmlspecialchars(strip_tags(trim($lat)));
    $cleanedLon = htmlspecialchars(strip_tags(trim($lon)));
    $cleanedId = htmlspecialchars(strip_tags(trim($id)));
    
    $sql = "UPDATE `localisations` 
            SET `nom`= ?,`type`= ?,`adresse`= ?,`codepostal`= ?,`ville`= ?,`url`= ?,`latitude`= ?,`longitude`= ? 
            WHERE `id` = ?";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $cleanedName);
    $stmt->bindValue(2, $cleanedType);
    $stmt->bindValue(3, $cleanedAdd);
    $stmt->bindValue(4, $cleanedCode);
    $stmt->bindValue(5, $cleanedVille);
    $stmt->bindValue(6, $cleanedUrl);
    $stmt->bindValue(7, $cleanedLat);
    $stmt->bindValue(8, $cleanedLon);
    $stmt->bindValue(9, $cleanedId, PDO::PARAM_INT);
    
    try {
        $stmt->execute();
        if($stmt->rowCount()===0) return false;
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
    
}


