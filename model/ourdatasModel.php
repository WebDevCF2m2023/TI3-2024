<?php
// Sélectionnez toutes les données
function getAllOurdatas(PDO $db, $order = "DESC"): array|string
{
    // l'ordre ne peut être que ASC ou DESC
    $order = (in_array($order,['DESC','ASC'],true))? $order: "DESC";
    $sql ="SELECT * FROM localisations ORDER BY id $order;";
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

// récupération d'une data via son ID
function getOneOurdatasByID(PDO $connexion, int $id): array|string
{
    // création de la requête
    $sql = "SELECT * FROM `localisations` WHERE `id` = ? ";
    // préparation de la requête (car entrée utilisateur)
    $prepare = $connexion->prepare($sql);
    try {
        $prepare->execute([$id]);
        if($prepare->rowCount()===0) return "Impossible de modifier cet article";
        $result = $prepare->fetch();
        $prepare->closeCursor();
        return $result;
    } catch (Exception $e) {
        return $e->getMessage();
    }

}

// suppression d'une data via son ID
function deleteOurdatasByID(PDO $db, int $idPomme) : bool|string
{
    $sql = "DELETE FROM localisations WHERE `id` = ?";
    $prepare = $db->prepare($sql);
    try {
        $prepare->execute([$idPomme]);
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }           
}

// Modification d'une data via son ID
function updateOurdatasByID(
                            PDO $db,
                            int $id,
                            string $nom, 
                            string $adresse, 
                            int $numero, 
                            string $ville, 
                            int $codepostal, 
                            float $latitude,
                            float $longitude 
                            ) 
        : bool|string
{
    $sql = "UPDATE `localisations` SET `nom` = :noms, `adresse` = :adresses, `numero` = :num,`ville` = :city, `codepostal` = :code,`latitude` = :lat,`longitude` = :long  WHERE `id` = :id";
    $prepare = $db->prepare($sql);
    try{
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        $prepare->bindValue(":noms", $nom);
        $prepare->bindValue(":adresses", $adresse);
        $prepare->bindValue(":num", $numero);
        $prepare->bindValue(":city", $ville);
        $prepare->bindValue(":code", $codepostal);
        $prepare->bindValue(":lat", $latitude);
        $prepare->bindValue(":long", $longitude);
        // return true si réussi, sinon on va dans le catch
        // return $prepare->execute();
        $prepare->execute();
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }
    
}


// ajoutez avec une requête préparée la nouvelle data
function addOurdatas(PDO $db, 
                            string $nom, 
                            string $adress, 
                            int $numero, 
                            string $ville, 
                            int $codepostal, 
                            float $latitude,
                            float $longitude 
                    ) : bool|string
{
    // création d'une variable contenant la requête SQL préparée avec les ?
    $sql = "INSERT INTO `localisations` (`nom`, `adresse`,`numero`,`ville`,`codepostal`, `latitude`,`longitude`) 
            VALUES(?,?,?,?,?,?,?);";
    // préparation de la requête
    $prepare = $db->prepare($sql);

    try{
        $prepare->execute([$nom, $adress,$numero,$ville,$codepostal, $latitude, $longitude]);
        $prepare->closeCursor();
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }

    
}