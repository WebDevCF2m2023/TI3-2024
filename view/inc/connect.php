<?php
if(!isset($_SESSION['monID']) || 
$_SESSION['monID']!== session_id())
{
header("location: ?connect");
    exit();
}
?>