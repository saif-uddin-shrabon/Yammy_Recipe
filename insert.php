<?php
include 'config.php';

$recipeName = $_POST['recipe_title'];
$recipeIngredient = $_POST['recipe_ingredient'];
$recipeDetails = $_POST['recipe_details'];
$recipeImage = $_FILES['image'];

// echo "<pre>";
// print_r($recipeImage);
// echo "</pre>";

$imageLocation = $_FILES['image']['tmp_name'];
$imageName = $_FILES['image']['name'];

$image_des = "img/" . $imageName;

move_uploaded_file($imageLocation, $image_des);


$insertQuery = "INSERT INTO `recipe_item`(`Recipe_Title`, `Recipe_Ingredient`, `Recipe_Details`,`Image`) VALUES ('$recipeName','$recipeIngredient','$recipeDetails','$image_des')";

if (!mysqli_query($con, $insertQuery)) {
    echo "<script> alert('Insert Failed !!'); </script>";
} else {
    echo "<script> alert('Successfully Inserted !!'); window.location.href = 'homepage.php'; </script>";
}

?>