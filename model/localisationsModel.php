<?php

//Prépare toutes les emplacements pour la vue.
function getAllCinemas (PDO $cine) : array | bool | string {
    // Comme cela sera utilisé pour la plupart de l'affichage des emplacements, j'ai pris le temps de donner des alias à ceux qui en avaient besoin.
    $sql = "SELECT `id`, `nom`, `type`, 
                    `adresse`   AS `add`,              
                   `codepostal` AS `code`, 
                   `ville`, `url`, 
                   `latitude`   AS `lat`, 
                   `longitude`  AS `lon`
                   
            FROM `localisations`
            ORDER BY `id` DESC";

    try{

        $query = $cine->query($sql);
            if($query->rowCount()===0) return false;
        $result = $query->fetchAll();
            $query->closeCursor();
        return $result;

    }catch(Exception $e) {
        return $e->getMessage();
    }
}

function getOneCinema (PDO $del, $id) : array | string {
    $sql = "SELECT `id`, `nom`, `type`, 
                    `adresse`   AS `add`,              
                   `codepostal` AS `code`, 
                   `ville`, `url`, 
                   `latitude`   AS `lat`, 
                   `longitude`  AS `lon`
            FROM `localisations`
            WHERE `id` = :id";

    $stmt = $del->prepare($sql);
    $stmt->bindParam(":id", $id);
    try {
        $stmt->execute();
        $result = $stmt->fetch(); 
        return $result;
        
    }catch(Exception $e) {
        return $e->getMessage();
    } 
}

function deleteCinemaFromList (PDO $db, $id) : bool | string {
    $sql = "DELETE FROM `localisations`
            WHERE `id` = ?";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $id);
    try {
        $stmt->execute();
        if($stmt->rowCount()===0) return false;

            return true;
    }catch(Exception $e) {
        return $e->getMessage();
    } 
}

/*
function getCinemasByType (PDO $cine, $type) : array | bool | string {
    // Comme cela sera utilisé pour la plupart de l'affichage des emplacements, j'ai pris le temps de donner des alias à ceux qui en avaient besoin.
    $sql = "SELECT `id`, `nom`, `type`, 
                    `adresse` AS `add`,              
                   `codepostal` AS `code`, 
                   `ville`, `url`, 
                   `latitude` AS `lat`, 
                   `longitude` AS `lon`
                   
            FROM `localisations`
            WHERE `type` = ?";

    $stmt = $cine->prepare($sql);
    try{
        $stmt->execute([$type]);
        $result = $stmt->fetchAll();
        return $result;
    }catch(Exception) {
        $errorMessage = "Sorry, couldn't get cinemas by type";
        return $errorMessage;
    }
}

*/