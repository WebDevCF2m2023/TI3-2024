<?php
$allLocals = getAllLocals($db);

// LOGIN
if (isset($_POST["userNameInp"], $_POST["userPassInp"])) {
    $login = attemptAdminLogin($db, $_POST["userNameInp"], $_POST["userPassInp"]);
    if ($login === true) {
            header ("Location: ?page=adminHome");
        }else {
            $errorMessage = "Saissisez correctement vos détails";
            header ("Location: ?page=login");
        }

    }