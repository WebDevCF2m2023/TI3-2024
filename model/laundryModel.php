<?php

function standardClean ($cleanThis) : string | bool {
    $cleaned = htmlspecialchars(strip_tags(trim($cleanThis)));
        return $cleaned;
    }


function simpleTrim ($cleanThis) : string | bool {
    $cleaned = trim($cleanThis);
        return $cleaned;
    }

function urlClean ($cleanThis) : string | bool {
    $cleaned = filter_var($cleanThis, FILTER_SANITIZE_URL);
        return $cleaned;
}