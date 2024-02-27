<?php
session_start();

include("connect-database.php");
if(!isset($_SESSION['valid'])){
    header("location:login.html");
    
}


?>