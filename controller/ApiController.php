<?php
$localisations = getAlllocalisations($db);

if(is_string($localisations)) { // error
    echo json_encode(['error' => $localisations]);
}else echo json_encode($localisations);