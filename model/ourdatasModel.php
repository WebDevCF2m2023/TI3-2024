<?php
// Sélectionnez toutes les données
function getAllOurdatas(PDO $db): array|string
{
    $sql ="SELECT * FROM localisations ORDER BY id DESC;";
    try{
        $query = $db->query($sql);
        if($query->rowCount()===0) return "Pas encore de datas";
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;

    }catch(Exception $e){
        return ['error'=>$e->getMessage()];
    }
}

// charger une seule donnée
function getOneOurdatas(PDO $db, int $id): array|string
{
    $sql = "SELECT * FROM localisations WHERE id = ?;";
    $prepare = $db->prepare($sql);
    $prepare->bindParam(1,$id,PDO::PARAM_INT);
    try{
        $prepare->execute();
        if($prepare->rowCount()===0) return "Data non existante";
        $result = $prepare->fetch();
        $prepare->closeCursor();
        return $result;
    }catch(Exception $e){
        return ['error'=>$e->getMessage()];
    }
}

// mettre à jour une donnée
function updateOurdatas(PDO $db,
                        string $nom,
                        string $adresse,
                        float $latitude,
                        float $longitude,
                        int $id
                        ) : bool|string
{
    $prepare = $db->prepare("UPDATE localisations SET nom = ?, adresse = ?, latitude = ?, longitude = ? WHERE id = ?");
    $prepare->bindParam(1,$nom);
    $prepare->bindParam(2,$adresse);
    $prepare->bindParam(3,$latitude);
    $prepare->bindParam(4,$longitude);
    $prepare->bindParam(5,$id,PDO::PARAM_INT);
    try{
        $prepare->execute();
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }
}

// ajoutez avec une requête préparée la nouvelle data
function addOurdatas(PDO $db, 
                    string $nom, 
                    string $adresse, 
                    float $latitude,
                    float $longitude
                    ) : bool|string
{
    $prepare = $db->prepare("INSERT INTO localisations (nom, adresse, latitude, longitude) VALUES (?,?,?,?)");
    $prepare->bindParam(1,$nom);
    $prepare->bindParam(2,$adresse);
    $prepare->bindParam(3,$latitude);
    $prepare->bindParam(4,$longitude);
    try{
        $prepare->execute();
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }
}

// supprimer une donnée

function deleteOurdatas(PDO $db, int $id): bool|string
{
    $prepare = $db->prepare("DELETE FROM localisations WHERE id = ?");
    $prepare->bindParam(1,$id,PDO::PARAM_INT);
    try{
        $prepare->execute();
        if($prepare->rowCount()===0) return "Data non existante";
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }
}