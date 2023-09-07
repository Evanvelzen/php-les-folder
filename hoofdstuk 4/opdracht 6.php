<?php

$hour = date("G");
$temp = 23;
$moisture = 90;

if ($hour >= 17 || $temp <= 20 || $moisture <= 85){

    echo "airco staat uit";
} else {
    echo "airco staat aan";
}
