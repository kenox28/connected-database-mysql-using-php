<?php


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "loginweb";

$connect = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

