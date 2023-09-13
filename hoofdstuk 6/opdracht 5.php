<?php

function calculatebrake($brakeLength){

    $brakeDelay = 5.5;



    $carrot1 = sqrt(2 );
    $carrot2 = sqrt($brakeDelay);
    $carrot3 =  sqrt($brakeLength);

    $speed = $carrot1 * $carrot2 * $carrot3;

    $speed = $speed * 3.6;

    $speed = number_format($speed, decimals: 0);

    echo "De snelheid van de auto met remspoor :$brakeLength M is $speed KM/U";
}

calculatebrake(50);

