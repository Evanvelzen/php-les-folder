<?php

if (isset($_POST['verzenden'])){
    $text = $_POST["text"];
    $checkbox = $_POST['checkbox'];

    if ($checkbox == 'capitalOnly'){
        echo strtoupper($text);
    } elseif ($checkbox == 'smallOnly'){
        echo strtolower($text);
    } elseif ($checkbox == 'capitalFront'){
        echo ucfirst($text);
    } elseif ($checkbox == 'capitalWords'){
        echo ucwords($text);
    }


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
    <input name="text" type="text">
    <br>
    <input name="checkbox" type="radio" value="capitalOnly" <?php if($checkbox == 'capitalOnly'){echo "checked=''checked";} ?>>capslock
    <br>
    <input name="checkbox" type="radio" value="smallOnly" <?php if($checkbox == 'smallOnly'){echo "checked=''checked";} ?>>geen capslock
    <br>
    <input name="checkbox" type="radio" value="capitalFront" <?php if($checkbox == 'capitalFront'){echo "checked=''checked";} ?>>eerste hoofdletter
    <br>
    <input name="checkbox" type="radio" value="capitalWords" <?php if($checkbox == 'capitalWords'){echo "checked=''checked";} ?>>elk hoofldetter
    <br>
    <input type="submit" name="verzenden">
</form>
</body>
</html>
