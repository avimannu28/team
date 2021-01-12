<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.bigcommerce.com/stores/7ndstw8j9b/v3/catalog/products/111",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "content-type: application/json",
        "x-auth-token: jx1j4fmr0zwforkkqru67bj0mnx76vq"
    ),
));

$response = curl_exec($curl);
$r = json_decode($response);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,
    th,
    td {
        border: 10px solid green;
    }
    </style>
</head>

<body>
    <table>
        <tr>

            <td>SKU</td>
            <td>NAME</td>
            <td>TYPE</td>
            <td>IMAGE</td>

        </tr>

        <tr>
            <td>
                <?php echo $r->data->id; ?>
            </td>
            <td>
                <?php echo $r->data->name; ?>
            </td>
            <td>
                <?php echo $r->data->categories[1]; ?>
            </td>
            <td>
                <?php
                echo "<img
            src='https://cdn11.bigcommerce.com/s-7ndstw8j9b/products/112/images/376/t10__47651.1610360642.386.513.jpg?c=1'
            alt='cv' height='100' width='100'>"; ?>
            </td>
        </tr>
    </table>
    <?php
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        // echo $r;
    }
    ?>
</body>

</html>