<?php
$number1 = 2;
$number2 = 2;
$number3 = 1    ;

if ($number1 > $number2){
    $shortside = $number2 + $number3;

    if ($shortside < $number1){
        echo "dit is een geldige direhoek";

    } else{
        echo"dit is geen geldige driehoek";
    }
} elseif($number1 > $number3){
    $shortside = $number2 + $number3;

    if ($shortside < $number1){
        echo "dit is een geldige direhoek";

    } else{
        echo"dit is geen geldige driehoek";
    }
}elseif ($number2 < $number3){
    $shortside = $number2 + $number3;

    if ($shortside < $number3){
        echo "dit is een geldige direhoek";

    } else{
        echo"dit is geen geldige driehoek";
    }
}


