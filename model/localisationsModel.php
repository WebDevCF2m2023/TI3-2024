<?php

function getAllOurdatas(PDO $db): array|string {

    $sql = "SELECT * FROM localisations ORDER BY id;";
    try{
        $query = $db->query($sql);
        if($query->rowCount()===0) return "Pas encore de datas";
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;

    }catch(Exception $e){
        return['error'=>$e->getMessage()];
    }
    
}

function getOneOurdatasByID(PDO $db, int $id): array|string 
{
    $sql = "SELECT * FROM `localisations` WHERE `id` = ?";
    $prepare = $db->prepare($sql);

    try{
       $prepare->execute([$id]);
       if($prepare->rowCount()===0) return "Impossible de modifier cet article";
       $result = $prepare->fetch();
       $prepare->closeCursor();
       return $result;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function updateOurdatasByID(PDO $db, int $idourdatas, string $titre, string $description, string $ville, string $codepostal, float $latitude, float $longitude) : bool|string
{
  $sql = "UPDATE `localisations` SET `nom` = ?, `adresse` = ?, `codepostal` = ?, `ville` = ?, `latitude` = ?, `longitude` = ? WHERE `id` = ?";
  $prepare = $db->prepare($sql);
  try{
    $prepare->execute([
        $titre,
        $description,
        $codepostal,
        $ville,
        $latitude,
        $longitude,
        $idourdatas
    ]);

    if($prepare->rowCount()===0) return false;

    return true;

  }catch(Exception $e){
     return $e->getMessage();

}
}

function addOurdatas(PDO $db, string $titre, string $description, string $ville, string $codepostal, float $latitude,float $longitude) : bool|string
{
    $sql = "INSERT INTO `localisation` (`nom`, `adresse`, `codepostal`, `ville`, `latitude`, `longitude`) 
            VALUES(?,?,?,?,?,?);";
    
    $prepare = $db->prepare($sql);

    try{
        $prepare->execute([$titre, $description, $codepostal, $ville, $latitude, $longitude]);
        $prepare->closeCursor();
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }

}

function deleteOneDataByID(PDO $db, int $id): bool|string
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

function addNewDatas (PDO $db, $title, $desc, $ville, $codepostal, $lat, $long) {
    $sql = "INSERT INTO `localisations`(`nom`, `adresse`, `codepostal`, `ville`, `latitude`, `longitude`) VALUES (?,?,?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1,$title);
    $stmt->bindValue(2,$desc);
    $stmt->bindValue(3,$codepostal);
    $stmt->bindValue(4,$ville);
    $stmt->bindValue(5,$lat);
    $stmt->bindValue(6,$long);

    try {
        $stmt->execute();
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}