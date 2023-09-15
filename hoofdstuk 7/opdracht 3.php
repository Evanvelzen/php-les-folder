<?php

if (isset($_POST["verander"])) {
    $color = $_POST["kleur"];

    if ($color === "rood") {
        echo "<style type=text/css> body{background-color: red}</style>";
    } elseif ($color === "blauw") {
        echo "<style type=text/css> body{background-color: blue}</style>";
    } elseif ($color === "groen") {
        echo "<style type=text/css> body{background-color: green}</style>";
    } elseif ($color === "roze") {
        echo "<style type=text/css> body{background-color: pink}</style>";
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

    <input type="radio" name="kleur" value="rood">rood
    <input type="radio" name="kleur" value="blauw">blauw
    <input type="radio" name="kleur" value="groen">groen
    <input type="radio" name="kleur" value="roze">roze

    <br>

    <input type="submit" name="verander">

</form>

</body>
</html>


