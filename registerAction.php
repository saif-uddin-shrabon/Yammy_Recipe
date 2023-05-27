<?php
include 'config.php';
$r_firstName = $_POST['firstName'];
$r_lastName = $_POST['lastName'];
$r_email = $_POST['r_Email'];
$r_number = $_POST['r_mobilenumber'];
$r_pass = $_POST['r_Pass'];
$r_conPass = $_POST['r_ConPass'];

$username_pattern = "/^[A-Za-z .]{3,20}$/";
$phone_pattern = "/^(\+88)?-?01[3-9]\d{8}$/";
$email_pattern = "/^(cse|eee|law)_\d{10}@lus\.ac\.bd$/";
$pass_pattern = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$!%&*_+><]).{6,20}$/";

$insertQuery = "INSERT INTO `yammy_user`(`First_Name`, `Last_Name`, `Email`, `Password`, `Mobile_Number`) VALUES ('$r_firstName','$r_lastName','$r_email','$r_conPass','$r_number')";
$duplicate_email = mysqli_query($con, "SELECT * FROM `yammy_user` WHERE Email='$r_email'");

if (mysqli_num_rows($duplicate_email) > 0) {
    echo "<script> alert('Email Already Taken !!'); window.location.href = 'registration.php'; </script>";
} elseif (!preg_match($email_pattern, $r_email)) {
    echo "<script> alert('Invalid email address. Email address must be in the format \'cse_XXXXXXXXXX@lus.ac.bd\', \'eee_XXXXXXXXXX@lus.ac.bd\', or \'law_XXXXXXXXXX@lus.ac.bd\'!!'); window.location.href = 'registration.php'; </script>";
} elseif (!preg_match($phone_pattern, $r_number)) {
    echo "<script> alert('Invalid phone number. Phone number must be a valid Bangladeshi mobile number.!!'); window.location.href = 'registration.php'; </script>";
} elseif (!preg_match($pass_pattern, $r_pass)) {
    echo "<script> alert('Invalid password. Password must be 6-20 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special character (@#$!%&*_+><).!!'); window.location.href = 'registration.php'; </script>";
} elseif ($r_pass != $r_conPass) {
    echo "<script> alert('Password did not match!!'); window.location.href = 'registration.php'; </script>";
} elseif (!mysqli_query($con, $insertQuery)) {
    echo "<script> alert('Not Registered !!'); </script>";
} else {
    echo "<script> alert('Successfully Registered !!'); window.location.href = 'registration.php'; </script>";
}
?>