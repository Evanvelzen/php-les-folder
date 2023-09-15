<?php

if (isset($_POST["send"])) {
    $sale = $_POST["sale"];
    $price = $_POST["price"];

    $sale = 100 - $sale ;

    $answer = $price / 100 * $sale;



    echo $answer;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
    <label>prijs</label>
    <input class="text" name="price" "text">

    <br>

    <label>korting</label>
    <input class="text" name="sale" type="text">


    <br>

    <input type="submit" name="send">

</form>

</body>
</html>


