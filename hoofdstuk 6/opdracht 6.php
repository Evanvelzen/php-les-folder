<?php

function calculate($dollar)
{
    $euro = $dollar * 0.93;

    $euro = number_format($euro, decimals: 2 );
    echo "$$dollar is gelijk €$euro";
}

calculate(86.74);


