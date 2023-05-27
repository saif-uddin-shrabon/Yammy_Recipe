<?php
if(isset($_POST['Promt'])){

$ch = curl_init();

$Promt = $_POST['Promt'];

curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
$PostData = array(
    "model" => "text-davinci-001",
    "prompt"=>  $Promt,
    "temperature"=> 0.4,
    "max_tokens"=> 164,
    "top_p"=> 1,
    "frequency_penalty"=> 0,
    "presence_penalty"=> 0
);
$PostData = json_encode($PostData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer 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', // Replace 'YOUR_API_KEY' with your actual API key
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $PostData);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error: ' . curl_errno($ch);
}

curl_close($ch);
$response = json_decode($response, true);
echo $response['choices']['0']['text'];

}
?>
