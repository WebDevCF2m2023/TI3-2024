<?php

//Prépare toutes les emplacements pour la vue.
function getAllCinemas (PDO $cine) : array | bool | string {
    // Comme cela sera utilisé pour la plupart de l'affichage des emplacements, j'ai pris le temps de donner des alias à ceux qui en avaient besoin.
    $sql = "SELECT `id`, `nom`, `type`, 
                    `adresse` AS `add`,              
                   `codepostal` AS `code`, 
                   `ville`, `url`, 
                   `latitude` AS `lat`, 
                   `longitude` AS `lon`
                   
            FROM `localisations`";

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