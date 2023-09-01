<?php

$time = 13;

if($time > 6 && $time < 12 ) {
    echo "het is ochtend jij kut";
} else if ($time > 12 && $time < 18){
    echo "het is middag jij luie donder";
} else if($time > 18 && $time< 24){
    echo "het is avond";
} else if($time > 0 && $time < 6){
    echo "het is nacht";
};