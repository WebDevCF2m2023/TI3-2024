<?php



if(isset($_GET['connect'])){

   
    if(isset($_POST['username'],$_POST['passwd'])){

        
        $connection = administratorConnect($connect,$_POST['username'],$_POST['passwd']);


        if($connection === true){
            header("Location: ./");
            die();
        }

    }

    
    require "../view/public/connect.html.php";
    exit();
}

if(isset($_GET['loadDatas'])){
    $lesVilles = getAllLocalisations($connect);
    echo json_encode($lesVilles);
    exit();
}


require "../view/public/homepage.html.php";