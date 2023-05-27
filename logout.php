<?php
session_start();

if(isset($_SESSION["email"])){
    session_destroy();
    echo "<script> location.href = 'login.php' </script>";
}
else{
    echo "<script> alert('Don't Access !!') </script>";
    echo "<script> location.href = 'login.php' </script>";
}
?>
