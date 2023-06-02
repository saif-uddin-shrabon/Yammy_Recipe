<?php
include 'config.php';

$id = $_POST['id'];
$updatedRecipeName = $_POST['recipe_title'];
$updatedRecipeIngredient = $_POST['recipe_ingredient'];
$updatedRecipeDetails = $_POST['recipe_details'];
$updatedRecipeImage = $_FILES['image'];


if(!empty($_FILES['image']['name'])){
  $imageLocation = $_FILES['image']['tmp_name'];
  $imageName = $_FILES['image']['name'];
  
  $image_des = "img/" . $imageName;
  
  move_uploaded_file($imageLocation, $image_des);
}else{
  $image_des = $_POST['old_image'];
}




$query = "UPDATE `recipe_item` SET `Recipe_Title` = '$updatedRecipeName', `Recipe_Ingredient` = '$updatedRecipeIngredient', `Recipe_Details` = '$updatedRecipeDetails', `Image` = '$image_des' WHERE `id` = '$id'";
  if(mysqli_query($con, $query)){
    echo "<script> alert('Successfully Updated !!'); window.location.href = 'homepage.php'; </script>";
  }
?>