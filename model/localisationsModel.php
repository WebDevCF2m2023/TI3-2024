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


// Sans vergogne, pris du modèle de pagination de Michaël (TI2). 
// Encore une fois, c'est un si bon modèle qu'à part adapter les liens pour correspondre au modèle de routage, il y a très peu de choses à changer ici.                              

function paginationModel(string $url,
                        string $getName,
                        int $nbTotalItem,
                        int $currentPage=1, 
                        int $nbByPage=10
                        )
{
    if($nbTotalItem===0) return null;
    $sortie="";
    $nbPage = (int) ceil($nbTotalItem/$nbByPage);

    if($nbPage<2) return null;

    // on commence par le bouton précédent
    if($currentPage===1){
        // pas de liens
        $sortie.= "<< <";
    }elseif ($currentPage===2) {
        // liens vers l'accueil sans duplicate content (./ = ./?pg=1)
        $sortie.= "<a href='$url?cartePagi'><<</a> <a href='$url?cartePagi'><</a>";
    }else{
        // liens vers l'accueil et la page précédente
        $sortie.= "<a href='$url?cartePagi'><<</a> <a href='$url?cartePagi&$getName=".($currentPage-1)."'><</a>";
    }

    for($i=1;$i<=$nbPage;$i++)
    {
        // si on est sur la page en cours, on affiche un texte
        if($i===$currentPage) $sortie.= " $i ";
        // sinon si on affiche la page 1, on évite le duplicate content
        else if($i===1) $sortie.= " <a href='$url?cartePagi'>$i</a> ";
        // sinon on affiche un lien
        else $sortie.= " <a href='$url?cartePagi&$getName=$i'>$i</a> ";
    }
    // on termine par le bouton suivant
    $sortie.= $currentPage === $nbPage ? "> >>" : "<a href='$url?cartePagi&$getName=".($currentPage+1)."'>></a> <a href='$url?cartePagi&$getName=$nbPage'>>></a>";

    return $sortie;
}                              


function getPaginationInformations(PDO $db, int $currentPage, int $nbPerPage)
{
    $offset = ($currentPage - 1) * $nbPerPage;
    $sql = "SELECT  `id`, `nom`, `type`, 
                    `adresse`   AS `add`,              
                    `codepostal` AS `code`, 
                    `ville`, `url`, 
                    `latitude`   AS `lat`, 
                    `longitude`  AS `lon`
            FROM `localisations`
            ORDER BY `id` ASC LIMIT $offset,$nbPerPage";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}