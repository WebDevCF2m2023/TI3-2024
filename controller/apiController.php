<?php
header('Content-Type: application/json; charset=utf-8');

if(isset($_GET['offset'], $_GET['limit']) && ctype_digit($_GET['offset']) && ctype_digit($_GET['limit'])){
    $getLimit = (int) $_GET['limit'];
    $offset = (int) $_GET['offset'];
    if($getLimit > 1)
        $limit = $getLimit;
}
if(isset($limit, $offset))
    $locations = getAllLocations($db, $offset, $limit);
else 
    $locations = getAllLocations($db);

$total = getCountTotalLocations($db);

if(is_string($locations)) // error
    echo json_encode(['error' => $locations]);
elseif(is_string($total))
    echo json_encode(['error' => $total]);
else echo json_encode(isset($limit, $offset) ? [
    "total" => $total,
    "totalNotFiltered" => $total,
    "rows" => $locations
] : $locations);