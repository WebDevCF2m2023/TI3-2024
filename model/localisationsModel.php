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
