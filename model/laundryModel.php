<?php

function standardClean ($cleanThis) : string | bool {
    $cleaned = htmlspecialchars(strip_tags(trim($cleanThis)));
        return $cleaned;
    }
