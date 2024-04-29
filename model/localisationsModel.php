<?php

function get_all_localisations(PDO $db):array|string{
    try {
        $sql = "SELECT * FROM `localisations` ORDER BY `id` ASC";
        $query = $db->query($sql);
        $locations = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
        if (count($locations)===0){
            return "pas encore de lieux";
        }
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

function update_localisation_by_id(PDO $db, int $id, string $name, string $street, string $postal_code, string $phone_number, string $url, float $lat, float $long):true|string{
    //check the validity of the fields and filter them
    $name = htmlspecialchars(strip_tags(trim($name)),ENT_QUOTES);
    if ($name==="")return "name ne peut pas être vide";
    $street = htmlspecialchars(strip_tags(trim($street)),ENT_QUOTES);
    if ($street==="")return "street ne peut pas être vide";
    $postal_code = htmlspecialchars(strip_tags(trim($postal_code)),ENT_QUOTES);
    if ($postal_code==="")return "postal_code ne peut pas être vide";
    $phone_number = htmlspecialchars(strip_tags(trim($phone_number)),ENT_QUOTES);
    if ($phone_number==="")return "phone_number ne peut pas être vide";
    $url = htmlspecialchars(strip_tags(trim($url)),ENT_QUOTES);
    if ($url==="")return "url ne peut pas être vide";

    try {
        $sql = "UPDATE `localisations` SET
                `nom`=?,
                `rue`=?,
                `codepostal`=?,
                `telephone`=?,
                `url`=?,
                `latitude`=?,
                `longitude`=?
            WHERE
                `id`=?
        ;";
        $prepare = $db->prepare($sql);
        $prepare->execute([$name, $street, $postal_code, $phone_number, $url, $lat, $long, $id]);
        $prepare->closeCursor();
        return true;
    }catch (Exception $e){
        return $e->getMessage();
    }
}