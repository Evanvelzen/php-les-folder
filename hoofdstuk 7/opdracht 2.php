<?php

if (isset($_POST["send"])){
    $radio= $_POST['calculate'];
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    if($radio == "-"){
    $answer = $number1 - $number2;

    echo "antwoord $answer";
    } elseif ($radio == "*"){
        $answer = $number1 * $number2;

        echo "antwoord $answer";
    } elseif ($radio == "+"){
        $answer = $number1 + $number2;

        echo "antwoord $answer";
    } elseif ($radio == "/"){
        $answer = $number1 / $number2;

        echo "antwoord $answer";
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
    <label>getal 1</label>
    <input class="text" name="number1" type="text">

    <br>

    <input type="radio" name="calculate" value="+">plus
    <input type="radio" name="calculate" value="-">min
    <input type="radio" name="calculate" value="*">keer
    <input type="radio" name="calculate" value="/">deel

    <br>

    <label>getal 2</label>
    <input class="text" name="number2" type="text">


    <br>

    <input type="submit" name="send">

</form>

</body>
</html>

