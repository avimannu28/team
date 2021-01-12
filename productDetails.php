<?php

$curl = curl_init();


if(isset($_POST['submit'])){
    $id = $_POST['id'];
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.bigcommerce.com/stores/ausuz9ld5n/v3/catalog/products/".$id,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "content-type: application/json",
    "x-auth-token: e96kxrwyt46roo02s8v111sekdeecq8"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $response = json_decode($response,true);
//   echo "<pre>";
//   print_r($response);
    echo "<b>Product ID : </b>".$response['data']['id']."<br>";
    echo "<b>Product Name : </b>".$response['data']['name']."<br><br><br>";
}
}
?>
<form method="POST">
<label><b>Enter Product ID :</b></label>
<input type="number" name="id"/>
<input type="submit" name="submit" value="SUBMIT"/>
</form>