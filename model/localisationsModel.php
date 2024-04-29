<?php

function get_all_localisations(PDO $db):array|string{
    try {
        $sql = "SELECT * FROM `localisations`";
        $query = $db->query($sql);
        $locations = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $locations;
    }catch (Exception $e){
        return $e->getMessage();
    }
}

function get_localisation_by_id(PDO $db, int $id):array|string{
    try {
        $sql = "SELECT * FROM `localisations` WHERE `id`=?";
        $prepare = $db->prepare($sql);
        $prepare->execute([$id]);
        $locations = $prepare->fetchAll(PDO::FETCH_ASSOC);
        $prepare->closeCursor();
        if (count($locations)===0){
            return "Localisation non trouvée";
        }
        return $locations[0];
    }catch (Exception $e){
        return $e->getMessage();
    }
}