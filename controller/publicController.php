<?php
$getMaps = getAllMaps($db);

// LOGIN
if (isset($_POST["userNameInp"], $_POST["userPassInp"])) {
    $login = attemptUserLogin($db, $_POST["userNameInp"], $_POST["userPassInp"]);
    if ($login === true) {
            header ("Location: ?page=adminHome");
        }else {
        $errorMessage = "Saissisez correctement vos détails";
    }
        include('../view/public/homeView.php');
        exit();
}

if (isset($_GET["sort"])) {
    $getMaps = getMapsByType($db, $_GET["sort"]);
}