<?php

$para1 = 10;

$para2 =1;
function power5  (){
$answer = 5*5*5;

echo " 5 x 5 x 5 = " . $answer . "<br> <br>";
}

function power10($para1){

 $answer2 = $para1 * $para1 * $para1;

echo "10 x 10 x 10 = " . $answer2 . "<br><br>";
}

function powerLoop($para2){
    for ($i = 0; $i < 25; $i++) {

        $answer = $para2 * $para2 * $para2;
        echo $para2 . "x" . $para2 . "x" . $para2 . "=" . $answer . "<br>";

        $para2 = $para2 +1;
    }
}



power5();
power10($para1);
powerLoop($para2);