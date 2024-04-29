<?php

function findThemAll(PDO $connect) : array|string {

    $sql = "SELECT ALL * FROM `localisations`;";

    try{
        // Lulusia Kingdom ? There was never such a place to begin with.
        $query = $connect->query($sql);

        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }catch(Exception $e){
        return $e->getMessage();
    }

}

function findJustOne(PDO $db, int $notTevinFault) : string|bool|array {

    $sql = "SELECT * FROM `localisations` WHERE `id` = 1;";
    $foundIt = $db->prepare($sql);
    $foundIt->bindParam(1, $notTevinFault, PDO::PARAM_INT);
    try{
        $foundIt->execute();
        if($foundIt->rowCount()===0) return false;
        $thisIsIt = $foundIt->fetch();
        return $thisIsIt;
    }catch(Exception $e){
        return $e->getMessage();
    }
}

function updateJustOne(PDO $db, int $id): string|bool{

    $sql = "UPDATE `localisations` SET `id`='?',`nom`='?',`adresse`='?',`codepostal`='?',`latitude`='?',`longitude`='?' WHERE `id` = 1;";
    $foundIt = $db->prepare($sql);
    try{
        $foundIt->execute([
            $id,
            $nom,
            $adresse,
            $codepostal,
            $lat,
            $lon,
            $idFromID
        ]);

        if($foundIt->rowCount()===0) return false;

        return true;

    }catch(Exception $e){
        return $e->getMessage();
    }
}

function createJustOne(PDO $db){}
