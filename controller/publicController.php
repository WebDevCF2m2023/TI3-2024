
<?php

if(isset($_GET['login'])){

    if(isset($_POST['user'], $_POST['password'])){
        // userConnect redirige automatiquement
        $error = administratorConnect($connect, $_POST['user'], $_POST['password']);
    }

    require("../view/public/connection.html.php");
}else{
    require("../view/public/homepage.html.php");
}