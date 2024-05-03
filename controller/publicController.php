<?php



    if(isset($_POST['username'],$_POST['passwd'])){

        $username = htmlspecialchars(strip_tags(trim($_POST['username'])),ENT_QUOTES);
        $userpwd = trim($_POST['passwd']);
        $connection = connectAdministrator($db,$username,$userpwd);

        if($connection === true){
            header("Location: ?bienvenue");
            die();
        }else{
            $error = "Login et/ou mot de passe incorrecte(s)";
        }
    }

$ourDatas = getAllOurdatas($db);