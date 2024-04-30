<?php

function get_all_localisations(PDO $db):array|string{
    try {
        $sql = "SELECT * FROM `localisations` ORDER BY `id` DESC";
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
        $locations = $prepare->fetch(PDO::FETCH_ASSOC);
        $prepare->closeCursor();
        if ($locations)return $locations;
        return "Localisation non trouvée";
    }catch (Exception $e){
        return $e->getMessage();
    }
}

function get_localisation_by_page(PDO $db, int $nb_by_page, int $page):array|string{
    try {
        $offset = $nb_by_page * ($page - 1);
        var_dump($offset);
        $limit = $nb_by_page;
        $sql = "SELECT * FROM `localisations` ORDER BY `id` DESC LIMIT $offset,$limit";
        var_dump($sql);
        $prepare = $db->prepare($sql);
        $prepare->execute();
        $locations = $prepare->fetchAll(PDO::FETCH_ASSOC);
        $prepare->closeCursor();
        if ($locations)return $locations;
        return "Localisations non trouvées";
    }catch (Exception $e){
        return $e->getMessage();
    }
}

function check_fields(string $name, string $street, string $postal_code, string $phone_number, string $url):true|string{
    $name = htmlspecialchars(strip_tags(trim($name)),ENT_QUOTES);
    if ($name==="")return "le champ `Nom` ne peut pas être vide";
    $street = htmlspecialchars(strip_tags(trim($street)),ENT_QUOTES);
    if ($street==="")return "le champ `Rue` ne peut pas être vide";
    $postal_code = htmlspecialchars(strip_tags(trim($postal_code)),ENT_QUOTES);
    if ($postal_code==="")return "le champ `Code postal` ne peut pas être vide";
    $phone_number = htmlspecialchars(strip_tags(trim($phone_number)),ENT_QUOTES);
    if ($phone_number==="")return "le champ `Telephone` ne peut pas être vide";
    $url = htmlspecialchars(strip_tags(trim($url)),ENT_QUOTES);
    if ($url==="")return "le champ `Url` ne peut pas être vide";
    return true;
}

function update_localisation_by_id(PDO $db, int $id, string $name, string $street, string $postal_code, string $phone_number, string $url, float $lat, float $long):true|string{
    $check = check_fields($name, $street, $postal_code, $phone_number, $url);
    if ($check!==true)return $check;

    try {
        $sql = "UPDATE `localisations`
            SET
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

function insert_localisation(PDO $db, string $name, string $street, string $postal_code, string $phone_number, string $url, float $lat, float $long):true|string{
    $check = check_fields($name, $street, $postal_code, $phone_number, $url);
    if ($check!==true)return $check;

    try {
        $sql = "INSERT INTO `localisations`
                ( `nom`, `rue`, `codepostal`, `telephone`, `url`, `latitude`, `longitude`)
                VALUES
                (?,?,?,?,?,?,?)
        ;";
        $prepare = $db->prepare($sql);
        $prepare->execute([$name, $street, $postal_code, $phone_number, $url, $lat, $long]);
        $prepare->closeCursor();
        return true;
    }catch (Exception $e){
        return $e->getMessage();
    }
}

function remove_location(PDO $db, int $id):true|string{
    try {
        $sql = "DELETE FROM `localisations` WHERE `id`=?";
        $prepare = $db->prepare($sql);
        $prepare->execute([$id]);
        $prepare->closeCursor();
        return true;
    }catch (Exception $e){
        return $e->getMessage();
    }
}

function get_locations_number(PDO $db):int|string{
    try {
        $sql = "SELECT COUNT(*) AS nb FROM `localisations`";
        $query = $db->query($sql);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $result["nb"];
    }catch (Exception $e){
        return $e->getMessage();
    }
}