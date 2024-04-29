<?php


// GET ONE
if (isset($_GET["action"], $_GET["item"]) && $_GET["action"] === "update" && ctype_digit($_GET["item"])) {
    $updateItem = getOneItemById ($db, $_GET["item"]);
    if($updateItem === true) {
        header('Location: ?page=seetable&action=update');
    }
}


// INSERT
if (isset($_POST["insertNameInp"],
          $_POST["insertTypeInp"],
          $_POST["insertAddInp"],
          $_POST["insertCodeInp"],
          $_POST["insertVilleInp"],
          $_POST["insertURLInp"],
          $_POST["insertLatInp"],
          $_POST["insertLonInp"])) {
    $insertItem = insertNewItem($db,
                                 $_POST["insertNameInp"],
                                 $_POST["insertTypeInp"],
                                 $_POST["insertAddInp"],
                                 (int) $_POST["insertCodeInp"], 
                                 $_POST["insertVilleInp"],
                                 $_POST["insertURLInp"],
                                 (float) $_POST["insertLatInp"],
                                 (float) $_POST["insertLonInp"]);
                                 
    if ($insertItem === true){
        header('Location: ?page=adminHome');
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

// UPDATE
if (isset($_POST["updateNameInp"],
          $_POST["updateTypeInp"],
          $_POST["updateAddInp"],
          $_POST["updateCodeInp"],
          $_POST["updateVilleInp"],
          $_POST["updateURLInp"],
          $_POST["updateLatInp"],
          $_POST["updateLonInp"])) {
    $updateItemById = updateItemById($db, $_POST["updateNameInp"], $_POST["updateTypeInp"], $_POST["updateAddInp"], (int) $_POST["updateCodeInp"], $_POST["updateVilleInp"],$_POST["updateURLInp"],(float) $_POST["updateLatInp"],(float) $_POST["updateLonInp"],(int) $_GET["item"]);
    if ($updateItemById === true){
        header('Location: ?page=adminHome');
    }
}