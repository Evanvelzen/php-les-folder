<?php
//variablelen
    $date = date("l-j-F-Y");
    $date2 = date("z");
    $date3 = date("l");
    $date4 = date("w");
    $date5 = date("t");
    $date6 = date("L");
    $date7 = date("F");
    $check = 1;

//hier wordt er een e bij de datum gezet indien nodig
    $date4 = $date4 . "e";
    $date2 = $date2 . "e";

//hier wordt code geprint op het scherm
echo "Het is vandaag: $date. <br>";
echo "Vandaag is het de $date2 dag van het jaar. <br>";
echo "$date3 is de $date4 dag van de week. <br>";
echo "De maand $date7 heeft in totaal $date5 dagen. <br>";

//else if statement
if($date6 < $check) {
    echo "Er is geen schikkeljaar op het moment. <br>";
    } else {
    echo "Er is een schikkeljaar op het moment. <br>";
}