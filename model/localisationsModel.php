<?php

// J'ai ajouté la capture des erreurs à chaque fonction. 
// En général, si true ou un tableau est renvoyé, tout va bien.
// Si false est renvoyé, alors quelque chose s'est mal passé du côté SQL.
// Si une chaîne est renvoyée, quelque chose ne va pas avec le PHP.


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
        // Pas besoin d'utiliser un prepare ici car il n'y a pas de saisie utilisateur
        $query = $cine->query($sql);
            if($query->rowCount()===0) return false;
        $result = $query->fetchAll();
            $query->closeCursor();
        return $result;

    }catch(Exception $e) {
        return $e->getMessage();
    }
}

// Sélectionnez un seul cinéma en prévision d'une mise à jour ou d'une suppression.
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
    // Ici, j'utilise des marqueurs nommés pour l'instruction préparée
    $stmt->bindParam(":id", $id);   
    try {
        $stmt->execute();
        $result = $stmt->fetch(); 
        return $result;
        
    }catch(Exception $e) {
        return $e->getMessage();
    } 
}
/*
// Sélection des cinémas par catégorie pour l'insertion/mise à jour.
function getTypesOfCinema (PDO $db) : array | bool | string {
    $sql = "SELECT DISTINCT `type`
            FROM `localisations`";
    try{        
        // Encore, pas besoin d'utiliser un prepare ici car il n'y a pas de saisie utilisateur
        $query = $db->query($sql);
            if($query->rowCount()===0) return false;
        $result = $query->fetchAll();
            $query->closeCursor();
        return $result;

    }catch(Exception $e) {
        return $e->getMessage();
    }
}
*/

// DELETE
function deleteCinemaFromList (PDO $db, $id) : bool | string {
    $sql = "DELETE FROM `localisations`
            WHERE `id` = ?";

    $stmt = $db->prepare($sql);
    // Et ici, j'ai utilisé des marqueurs ? pour l'instruction.
    $stmt->bindParam(1, $id);
    try {
        $stmt->execute();
        if($stmt->rowCount()===0) return false;

            return true;
    }catch(Exception $e) {
        return $e->getMessage();
    } 
}

// INSERT 

function insertCinemaIntoList (PDO $db,
                              string $nom,
                              string $type, 
                              string $add, 
                              int $code, 
                              string $ville, 
                              string $url, 
                              float $lat, 
                              float $lon) : bool | string {

    $sql = "INSERT INTO `localisations`
                        (`nom`,
                        `type`, 
                        `adresse`, 
                        `codepostal`, 
                        `ville`, 
                        `url`, 
                        `latitude`, 
                        `longitude`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            
            $stmt = $db->prepare($sql);
            $stmt->bindValue(1, $nom);
            $stmt->bindValue(2, $type);
            $stmt->bindValue(3, $add);
            $stmt->bindValue(4, $code);
            $stmt->bindValue(5, $ville);
            $stmt->bindValue(6, $url);
            $stmt->bindValue(7, $lat);
            $stmt->bindValue(8, $lon);

            try {
                $stmt->execute();
                if($stmt->rowCount()===0) return false;
        
                    return true;
            }catch(Exception $e) {
                return $e->getMessage();
            } 
                              }

// UPDATE

function updateCinemaInList (PDO $db,
                              string $nom,
                              string $type, 
                              string $add, 
                              int $code, 
                              string $ville, 
                              string $url, 
                              float $lat, 
                              float $lon,
                              int $id) : bool | string {
                               
                               
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


            $stmt->bindValue(1, $nom);
            $stmt->bindValue(2, $type);
            $stmt->bindValue(3, $add);
            $stmt->bindValue(4, $code);
            $stmt->bindValue(5, $ville);
            $stmt->bindValue(6, $url);
            $stmt->bindValue(7, $lat);
            $stmt->bindValue(8, $lon);
            $stmt->bindValue(9, $id);

            try {
                $stmt->execute();
                if($stmt->rowCount()===0) return false;
        
                    return true;
            }catch(Exception $e) {
                return $e->getMessage();
            } 
                              }