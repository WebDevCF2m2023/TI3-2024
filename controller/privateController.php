<?php


// GET ONE
if (isset($_GET["action"], $_GET["item"]) && $_GET["action"] === "update" && ctype_digit($_GET["item"])) {
    $updateItem = getOneItemById ($db, $_GET["item"]);
    if($updateItem === true) {
        header('Location: ?page=seetable&action=update');
    }
}

// GET ITEM PRE-SUPPRESSION
if (isset($_GET["action"], $_GET["item"]) && $_GET["action"] === "delete" && ctype_digit($_GET["item"])) {
    $mapDelete = getOneItemById($db,$_GET["item"]);
}

// DELETE
if (isset($_GET["action"], $_GET["item"], $_GET["confirm"]) && ctype_digit($_GET["item"]) && $_GET["action"] === "delete" && $_GET["confirm"] === "ok") {
    $deleteItem = deleteItemFromListByID ($db, $_GET["item"]);
    if($deleteItem === true) {
        header('Location: ?page=adminHome');
    }
}