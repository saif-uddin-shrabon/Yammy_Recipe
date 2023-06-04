<?php

include 'config.php';

$input_username = $_GET["email"];
$input_pass = $_GET["Pass"];




$_result = mysqli_query($con, "SELECT * FROM `yammy_user` WHERE Email='$input_username' AND Password='$input_pass'");

if (mysqli_num_rows($_result)) {

    session_start();

    $_SESSION["email"] = $input_username;



    echo "<script> location.href = 'homepage.php' </script>";

} else {
    echo "<script> alert('Username and password do not match !!') </script>";
    echo "<script> location.href = 'login.php' </script>";
}