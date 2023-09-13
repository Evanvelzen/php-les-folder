<?php
$ray = 5;

function calculateCircumference ($ray){
    $answerCircumference = $ray + $ray * 3.14;;
    echo "dit is de omtrek van de circle is: " . $answerCircumference . "<br>";
}

function calculateArea ($ray){

    $answerArea = $ray * $ray * 3.14;

    echo "De oppervlakte van de circle is: " . $answerArea;
}

calculateCircumference ($ray);
calculateArea ($ray);
