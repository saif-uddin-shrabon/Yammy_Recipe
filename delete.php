<?php
 
include 'config.php';

$id = $_GET['id'];

echo $id;


$deleteQuery = "DELETE FROM `recipe_item` WHERE id = $id";

if(!mysqli_query($con, $deleteQuery)) {

      echo "Error: ". mysqli_error($deleteQuery);
}
   


 header("location:homepage.php");