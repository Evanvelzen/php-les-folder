
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
    <label>bedrag</label>
    <input class="text" name="price" type="text">

    <br>

    <label>btw</label>
    <input type="radio" name="btw" value="1.09">9%
    <input type="radio" name="btw" value="1.21">21%

    <br>

    <input type="submit" name="send" >

</form>

</body>
</html>

<?php
session_start();


if (isset($_POST['send'])){

    $price = $_POST['price'];
    $btw = $_POST['btw'];



    $fullPrice = $price * $btw;

    echo $fullPrice ;
}
?>
