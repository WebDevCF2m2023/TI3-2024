<?php
if(isset($_GET['login'])){

    if(isset($_POST['user'], $_POST['password'])){
        // userConnect redirige automatiquement
        $error = userConnect($db, $_POST['user']);
    }

    require("../view/public/login.html.php");
}else{
    require("../view/public/home.html.php");
}