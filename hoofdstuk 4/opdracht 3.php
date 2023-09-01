<?php
    $numberOne = 1944;
    $numberTwo =  1959;
    //bonus punten voor als iemand weet wat er zo bijzonder is aan deze cijfers

    if($numberOne > $numberTwo){
        $tempresult = $numberOne * 2;
        $result = $tempresult + $numberTwo;

        echo $result;
    } elseif ($numberTwo > $numberOne){
        $tempresult = $numberTwo * 2;
        $result = $tempresult + $numberOne;

        echo "resultaat is $result";
    }

