<?php

function getAllGeoloc(PDO $db) : array|string
{
    $sql = "SELECT * FROM `localisations` ;";
    try{
        $query = $db->query($sql);
        // si il n'y a pas de résultats, fetchAll est un tableau vide
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }catch(Exception $e){
        return $e->getMessage();
    }
}


function getOneGeolocByID(PDO $db, int $getIt) : string|bool|array

{
    $sql = "SELECT * FROM localisations WHERE id = :id";
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


function updateOneGeolocByID(PDO $db, int $id, string $nom, string $adresse, int $codepostal, string $ville, int $nb_velos, float $lat, float $lon) : string|bool

{
    $sql = "UPDATE `localisations` SET `nom`= ? , `adresse`= ?, `codepostal`= ?, `ville`= ?, `nb_velos` = ? ,`latitude`= ?, `longitude`= ?  WHERE `id` = ?";
    $stmt = $db->prepare($sql);
    try{
        $stmt->execute([
            $nom, 
            $adresse,
            $codepostal,
            $ville,
            $nb_velos,
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


function insertOneGeolocByID(PDO $db, string $nom, string $adresse, int $codepostal, string $ville, int $nb_velos, float $lat, float $lon):
bool|string
{
    $sql = "INSERT INTO `localisations` (`nom`, `adresse`, `codepostal`, `ville`, `nb_velos`, `latitude`, `longitude`) VALUES (?,?,?,?);";
    $prepare = $db->prepare($sql);
    try{
        $prepare->execute([
            $nom, 
            $adresse,
            $codepostal,
            $ville,
            $nb_velos,
            $lat,
            $lon,
        ]);
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }
}


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