<?php
$locations = getAllLocations($db);

if(is_string($locations)) { // error // if $locations is a string, it means that an error occured
    echo json_encode(['error' => $locations]); // we send the error message to the client
}else echo json_encode($locations); // we send the locations to the client