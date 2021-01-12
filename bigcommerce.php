<?php

if(isset($_POST['submit']))
{
$id=$_POST['number'];
$curl = curl_init();
//heyyy

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.bigcommerce.com/stores/7ud2b3dr9p/v3/catalog/categories/$id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "x-auth-token:  r68qf9ypieclukv22gxlk1prsxn767j"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $data=json_decode($response,true);
  echo "<pre>";
  print_r($data);
  
}
}

?>

<form method='post'>
<label><b>Enter Id to get a Category  </b></label>
  <input type="number" name="number">
  <input type="submit" name="submit" value="submit">
</form>