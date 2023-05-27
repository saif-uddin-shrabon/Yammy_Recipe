<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "yammy";


$con = mysqli_connect($serverName, $userName, $password, $dbName);

if (!$con) {
    die("connection faild!!" . mysqli_connect_error());
}

?>