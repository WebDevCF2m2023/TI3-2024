<?php

function get_all_localisations(PDO $db):array{
    $sql = "SELECT * FROM `localisations`";
    $query = $db->query($sql);
    return $query->fetchAll(PDO::FETCH_ASSOC);
}