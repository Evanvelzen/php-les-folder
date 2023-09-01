<?php
    $time = 9;

    $result = match($time) {
        6, 7, 8, 9, 11, 12 => "ochtend",
        13, 14, 15, 17, 18 => "middag",
        19, 20, 21, 22, 23, 24 => "avond",
        0, 1, 2, 3, 4, 5 => "nacht",
    };

    echo $result;