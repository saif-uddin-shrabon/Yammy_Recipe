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