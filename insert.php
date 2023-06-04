<?php
include 'config.php';

$recipeName = $_POST['recipe_title'];
$recipeIngredient = $_POST['recipe_ingredient'];
$recipeDetails = $_POST['recipe_details'];
$recipeImage = $_FILES['image'];



$imageLocation = $_FILES['image']['tmp_name'];
$imageName = $_FILES['image']['name'];



$image_des = "img/" . $imageName;

move_uploaded_file($imageLocation, $image_des);

$insertQuery = "INSERT INTO `recipe_item`(`Recipe_Title`, `Recipe_Ingredient`, `Recipe_Details`, `Image`) VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($con, $insertQuery);
mysqli_stmt_bind_param($stmt, "ssss", $recipeName, $recipeIngredient, $recipeDetails, $image_des);
if (!mysqli_stmt_execute($stmt)) {
    echo "<script> alert('Insert Failed !!'); </script>";
} else {
    echo "<script> alert('Successfully Inserted !!'); window.location.href = 'homepage.php'; </script>";
}

mysqli_stmt_close($stmt);
mysqli_close($con);
?>
