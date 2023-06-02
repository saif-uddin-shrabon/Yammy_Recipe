<?php

include 'config.php';

$id = $_GET['id'];

// echo $id;

$dataFetchQuery = mysqli_query($con, "SELECT * FROM `recipe_item` WHERE id = '$id'");

$data = mysqli_fetch_array($dataFetchQuery);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />

  <link rel="stylesheet" href="css/coustom.css" />
  
            <!-- jQuery library -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    #mid {
      margin-top: 100px;
    
    }
    </style>




 
</head>

<body>


  <div class="d-flex justify-content-center" id="mid">
    <div class="modal-content w-75">
    
      <div class="p-4">
        <form action="updateAction.php" method="POST" enctype='multipart/form-data'>

               <!-- Image -->
        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="<?php echo $data['Image']; ?>"
                class="rounded-circle img-fluid" alt="Selected Image" id="selectedImage" style="width: 100px;" />
            </div>

          <!--Update Recipe Title input -->
          <div class="form-outline mb-4">
            <input type="text" id="name4" class="form-control" name="recipe_title"  value="<?php echo $data['Recipe_Title']  ?>"/>
            <label class="form-label" for="name4">Update Recipe Title</label>
          </div>
          <!--Recipe Ingredient input -->
          <div class="form-outline mb-4">
            <input type="text" id="name4" class="form-control" name="recipe_ingredient" value="<?php echo $data['Recipe_Ingredient']  ?>" />
            <label class="form-label" for="name4">Update Recipe Ingredient</label>
          </div>

          <!-- textarea input -->
          <div class="form-outline mb-4">
          <textarea id="textarea4" rows="4" class="form-control" name="recipe_details"><?php echo $data['Recipe_Details']; ?></textarea>
            <label class="form-label" for="textarea4">Update Recipe Making Process</label>
          </div>

           <!-- JPg file -->
           <div class="form-outline mb-4">
                        <label class="form-label" for="customFile">Add Image</label>
                        <input type="file" class="form-control" id="imageInput" name="image"?>"
            </div>


                    <!--  Ajax script -->
                    <script>
                    $(document).ready(function() {
                      
                        $('#imageInput').change(function() {
                        var file = $(this)[0].files[0]; 

                        if (file) {
                            var reader = new FileReader(); 

                            reader.onload = function(e) {
                            
                            $('#selectedImage').attr('src', e.target.result);
                            };

                            reader.readAsDataURL(file); 
                        } else {
                            
                            $('#selectedImage').attr('src', "<?php echo $data['Image']; ?>");
                        }
                        });
                    });
                    </script>

       
         <input type="hidden" id="name4" class="form-control" name="id" value="<?php echo $data['id']  ?>" />
         <input type="hidden" id="name4" class="form-control" name="old_image" value="<?php echo $data['Image']  ?>" />

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block">Update</button>
        </form>
      </div>
    </div>
  </div>




<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

</body>

</html>