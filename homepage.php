<?php
session_start();
if (isset($_SESSION["email"])) {
  //   echo "<h1>Welcome". $_SESSION['email']. "to registaion page! </h1> </br>";

  // echo "<script> alert('<h1>Welcome". $_SESSION['email']. "to registaion page! </h1>!') </script>";

} else {
  echo "<script> alert('Dont Acess !!') </script>";
  echo "<script> location.href = 'login.php' </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />


   
            <!-- jQuery library -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
  </style>

</head>

<body>
  <!-- Header -->

  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid justify-content-between">
      <!-- Left elements -->
      <div class="d-flex">
       
        <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
          <img src="img/test.jpg" height="20" alt="MDB Logo" loading="lazy" style="margin-top: 2px;" />
        </a>

        <!-- Search form -->
        <form action="" method="POST" class="input-group w-auto my-auto d-none d-sm-flex">
          <div class="input-group">
            <div class="form-outline">
              <input type="search" id="form1" name="search" required value="<?php
              if (isset($_POST['search'])) {
                echo $_POST['search'];
              } ?>" class="form-control" />
              <label class="form-label" for="form1">Search</label>
            </div>
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>
      </div>
      <!-- Left elements -->

      <!-- Center elements -->
      <ul class="navbar-nav flex-row d-none d-md-flex">
        <li class="nav-item me-3 me-lg-1 active">
          <a class="nav-link" href="#">
            <span><i class="fas fa-home fa-lg"></i></span>
            <span class="badge rounded-pill badge-notification bg-danger">1</span>
          </a>
        </li>




        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link" href="#">
            <span><i class="fas fa-plus-circle fa-lg" data-mdb-toggle="modal"
                data-mdb-target="#staticBackdrop4"></i></span>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop4" tabindex="-1" aria-labelledby="exampleModalLabel4"
              aria-hidden="true">
              <div class="modal-dialog d-flex justify-content-center">
                <div class="modal-content w-100">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Write to us</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">
                    <form action="insert.php" method="POST" enctype='multipart/form-data'>


              <!-- Image -->
                     
        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                class="rounded-circle img-fluid" id="selectedImage" style="width: 100px;" />
            </div>
    

                      <!--Recipe Title input -->
                      <div class="form-outline mb-4">
                        <input type="text" id="name4" class="form-control" name="recipe_title" />
                        <label class="form-label" for="name4">Recipe Title</label>
                      </div>
                      <!--Recipe Ingredient input -->
                      <div class="form-outline mb-4">
                        <input type="text" id="name4" class="form-control" name="recipe_ingredient" />
                        <label class="form-label" for="name4">Recipe Ingredient</label>
                      </div>

                      <!-- textarea input -->
                      <div class="form-outline mb-4">
                        <textarea id="textarea4" rows="4" class="form-control" name="recipe_details"></textarea>
                        <label class="form-label" for="textarea4">Recipe Making Process</label>
                      </div>

                      <!-- JPg file -->
                      <div class="form-outline mb-4">
                        <label class="form-label" for="customFile">Add Image</label>
                        <input type="file" class="form-control" id="imageInput" name="image" />
                      </div>

                      <!-- Ajac script -->

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
                            
                            $('#selectedImage').attr('src', 'https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp');
                        }
                        });
                    });
                    </script>

                      <!-- Checkbox -->
                      <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="checkbox4" checked />
                        <label class="form-check-label" for="checkbox4">
                          Send me a copy of this message
                        </label>
                      </div>

                      <!-- Submit button -->
                      <button type="submit" class="btn btn-primary btn-block">Send</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
          </a>
        </li>


      </ul>
      <!-- Center elements -->

      <!-- Right elements -->
      <ul class="navbar-nav flex-row">
        <li class="nav-item me-3 me-lg-1 ">
          <a class="nav-link d-sm-flex align-items-sm-center" href="#">
            <img src="img/test.jpg" class="rounded-circle" height="22" alt="Black and White Portrait of a Man"
              loading="lazy" />
            <strong class="d-none d-sm-block ms-1">John</strong>
          </a>
        </li>




        <li class="nav-item me-3 me-lg-1 mt-3">
          <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
            data-mdb-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-bell fa-lg"></i>
            <span class="badge rounded-pill badge-notification bg-danger">12</span>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-1 ms-3">
          <form action="logout.php" method="post">
            <!-- form fields and other content -->
            <button type="submit" class="btn btn-outline-dark" data-mdb-ripple-color="dark">Log Out</button>
          </form>

        </li>
      </ul>
      <!-- Right elements -->
    </div>
  </nav>
  <!-- Navbar -->


  <!-- Timeline -->
  <div class="row">
    <div class="col-md-8">

     

      <?php
      include 'config.php';

      // Check if search form submitted
      if (isset($_POST['search'])) {
        $filtervalue = $_POST['search'];
        $searchData = mysqli_query($con, "SELECT * FROM `recipe_item` WHERE `Recipe_Ingredient` LIKE '%$filtervalue%'");

        if (mysqli_num_rows($searchData) > 0) {
          while ($row = mysqli_fetch_array($searchData)) {
            echo "
      <div class='row gx-5 mt-3'>
        <div class='col-md-6 mb-4'>
          <div class='bg-image hover-overlay ripple shadow-2-strong rounded-5' data-mdb-ripple-color='light'>
            <img src='" . $row['Image'] . "' class='img-fluid' />
            <a href='#'>
              <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
            </a>
          </div>
        </div>

        <div class='col-md-6 mb-4 mt-5'>
          <h4><strong>" . $row['Recipe_Title'] . "</strong></h4>
          <h4>Ingredient: <span style='font-size: 20px;'>" . $row['Recipe_Ingredient'] . "</span></h4> 

          <p class='text-muted'>
            " . $row['Recipe_Details'] . "
          </p>
          <button type='button' class='btn btn-primary'>Edit</button>
          <button type='button' class='btn btn-primary'>Delete</button>
        </div>
      </div>";
          }
        } else {
          echo "<script> alert('No Data Found') </script>";
        }
      }
      ?>


      <!-- new php -->

      <?php
      include 'config.php';
      $allData = mysqli_query($con, "SELECT * FROM `recipe_item`");

      while ($row = mysqli_fetch_array($allData)) {
        echo "
    <div class='row gx-5 mt-3'>
    <div class='col-md-6 mb-4'>
      <div class='bg-image hover-overlay ripple shadow-2-strong rounded-5' data-mdb-ripple-color='light'>
        <img src='" . $row['Image'] . "' class='img-fluid' />
        <a href='#'>
          <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
        </a>
      </div>
    </div>

    <div class='col-md-6 mb-4 mt-5'>
      <h4><strong>" . $row['Recipe_Title'] . "</strong></h4>
      <h4>Ingredient: <span style='font-size: 20px;'>" . $row['Recipe_Ingredient'] . "</span></h4> 

      <p class='text-muted'>
      " . $row['Recipe_Details'] . "
      </p>
      
      <a href='update.php?id=$row[id]'  class='btn btn-primary'>Edit</a>
      <a href='delete.php?id=$row[id]' class='btn btn-primary'>Delete</a>
      
     

    </div>
  </div>";
      }
      ?>



      <!--Section: News of the day-->


    </div>
    <div class="col-md-4">

      <!-- ChatBot -->

      <section>
        <div class="container">

          <div class="row d-flex justify-content-center"  >
            <div class="" >

            <div class="card" id="chat2"
                style="border-color: transparent; box-shadow: inset 0px 0px 0px 1px transparent;">
                <div class="card-header d-flex justify-content-between align-items-center p-3">
                  <h5 class="mb-0">Chat</h5>
                  <form action="" method="post">
                    <!-- form fields and other content -->
                    <button type="submit" class="btn btn-primary btn-sm" name="deleteChatBootHistory" data-mdb-ripple-color="dark">Clear Chat</button>
                  </form>
                  <?php

                  if (isset($_POST['deleteChatBootHistory'])) {
                    $sql = "DELETE FROM `massage`";
                    $result = mysqli_query($con, $sql);
                  }

                  ?>
                </div>


                <div id="chat-container"  style="position: relative; height: 400px; overflow-y: scroll;">



                <?php

                include 'config.php';


                if (isset($_POST['Promt'])) {

                  $ch = curl_init();

                  $Promt = $_POST['Promt'];


                  curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
                  $PostData = array(
                    "model" => "text-davinci-001",
                    "prompt" =>"I have these  ingredients:".$Promt."your job is to suggest some delicious recipe using these ingredients.",
                    "temperature" => 0.4,
                    "max_tokens" => 500,
                    "top_p" => 1,
                    "frequency_penalty" => 0,
                    "presence_penalty" => 0
                  );
                  $PostData = json_encode($PostData);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
                  curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                    'Authorization: Bearer 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',  // api key
                  ]);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $PostData);

                  $response = curl_exec($ch);

                  if (curl_errno($ch)) {
                    echo 'Error: ' . curl_errno($ch);
                  }

                  curl_close($ch);
                  $response = json_decode($response, true);
                  $result = $response['choices']['0']['text'];


                  $insart_promt_respons =  "INSERT INTO `massage`(`user_promt`, `promt_respons`) VALUES ('$Promt','$result')";
                  
                  $duplicate_query = mysqli_query($con, "SELECT * FROM `massage` WHERE user_promt ='$Promt'");
                  if (mysqli_num_rows($duplicate_query) > 0) {
                    echo '<div class="alert alert-danger" role="alert" style="margin-top: 20px; margin-bottom: 20px;">'.
                      '<strong>Duplicate</strong> '. $Promt. '</div>';
                  } else if (!mysqli_query($con, $insart_promt_respons)) {
                    echo '<div class="alert alert-danger" role="alert" style="margin-top: 20px; margin-bottom: 20px;">'.
                      '<strong>Insert</strong> '. $Promt. '</div>';
                  } 
                

                  
                  $fetch_massage = mysqli_query($con, "SELECT * FROM `massage`");

                  while ($row = mysqli_fetch_array($fetch_massage)) {


                    echo "
                    <div class='d-flex flex-row justify-content-end mb-4 pt-1'>
                      <div>
                        <p class='small p-2 me-3 mb-1 text-white rounded-3 bg-primary'>".$row['user_promt']."</p>
                      </div>
                      <img src='img/chef.jpg' alt='avatar 1' style='width: 45px; height: 100%;'>
                    </div>
                    ";

                    echo '
                    <div class="d-flex flex-row justify-content-end mb-4 pt-1">
                        <div class="d-flex flex-row justify-content-start">
                            <img src="img/chef.jpg" alt="avatar 1" style="width: 45px; height: 40px;">
                            <div>
                                <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">' . $row['promt_respons'] . '</p>
                            </div>
                        </div>
                    </div>
                    
                    
                    ';

                  }
                }
                
                ?>


               


              
               

                </div>

              </div>


         

              <form action=" " method="POST" id="chat-form">
                <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
                  <img src="img/chef.jpg" alt="avatar 3" style="width: 40px; height: 100%;">
                  <input type="text" name="Promt" class="form-control form-control-lg" id="exampleFormControlInput1"
                    placeholder="Type message"
                    style="border-color: transparent;box-shadow: inset 0px 0px 0px 1px transparent;">
                  <button type="submit" class="ms-2"><i class="fas fa-paper-plane"></i></button>
                </div>
              </form>


            </div>

          </div>
        </div>

    </div>
    </section>

  </div>
  </div>



  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>