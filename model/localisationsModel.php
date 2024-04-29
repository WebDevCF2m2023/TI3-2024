<?php

// C'est une fonction qui recupère toutes les localisations 
function getAllGeoloc(PDO $connection) : array|string
{
    $sql = "SELECT * FROM `localisations` ;";
    try{
        $query = $connection->query($sql);
        // si il n'y a pas de résultats, fetchAll est un tableau vide
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }catch(Exception $e){
        return $e->getMessage();
    }
}

//C'est fonction qui charge une localisation a partir de son ID
// Elle l'affiche en tableau 
function getOneGeolocByID(PDO $db, int $getIt) : string|bool|array

{
    $sql = "SELECT * FROM `localisations` WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam("id", $getIt, PDO::PARAM_INT);
    try{
        $stmt->execute();
        if($stmt->rowCount()===0) return false;
        $geoloc = $stmt->fetch();
        $stmt->closeCursor();
        return $geoloc;
    }catch(Exception $e){
        return $e->getMessage();
    }
}

//C'est une fonction qui permet de mettre à jour un lieu 

function updateOneGeolocByID(PDO $db, int $id, string $rue, string $codePostal, string $ville, float $lat, float $lon) : string|bool

{
    $sql = "UPDATE `localisations` SET `rue`= ? , `codepostal`= ?, `ville`= ?,`latitude`= ?, `longitude`= ? WHERE `id` = ?";
    $stmt = $db->prepare($sql);
    try{
        $stmt->execute([
            $rue, 
            $codePostal,
            $ville,
            $lat,
            $lon,
            $id
        ]);
    
        // pas de modification par la requête
        if($stmt->rowCount()===0) return false;

        return true;

    }catch(Exception $e){
        return $e->getMessage();
    }
}

// C'est une fonction qui permet d'insérer un nouveaux lieu 

function insertOneGeolocByID(PDO $db, string $rue, string $codePostal, string $ville, float $lat, float $lon): bool|string
{
    $sql = "INSERT INTO `localisations` (`rue`,`codepostal`, `ville`, `latitude`, `longitude`) VALUES (?,?,?,?,?);";
    $prepare = $db->prepare($sql);
    try{
        $prepare->execute([
            $rue, 
            $codePostal, 
            $ville,
            $lat, 
            $lon
        ]);
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }
}

// C'est une fonction pour supprimer un lieu 

// pour supprimer un lieu
function deleteOneGeolocByID(PDO $db, int $id): bool|string
{
    $sql = "DELETE FROM `localisations` WHERE `id`= :id ";
    $stmt = $db->prepare($sql);
    $stmt->bindValue("id", $id, PDO::PARAM_INT);

    try{
        $stmt->execute();
        if($stmt->rowCount()===0) return false;
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }

}