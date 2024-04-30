<?php

$locations = getAllLocations($connect);

if(is_string($locations)) { 
    echo json_encode(['error' => $locations]);
}else echo json_encode($locations);