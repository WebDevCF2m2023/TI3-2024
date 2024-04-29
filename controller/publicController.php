<?php

if(isset($_GET['login'])){

    if(isset($_POST['username'], $_POST['passwd'])){
        // userConnect redirige automatiquement
        $error = userConnect($db, $_POST['username']);
    }

    require("../view/public/login.html.php");
}else{
    require("../view/public/home.html.php");
}
