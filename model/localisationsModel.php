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