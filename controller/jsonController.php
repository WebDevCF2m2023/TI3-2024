<?php


if (isset($_GET['json'])) {
    $datas = getAllCinemas($db);
    if (!is_string($datas)) {
        echo json_encode($datas);
    }
    exit();
}