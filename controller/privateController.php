<?php

$ourDatas = getAllOurdatas($db); 

if(isset($_GET['disconnect'])){

     disconnectAdministrator();
     die();

}
