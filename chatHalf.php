             
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


               <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>