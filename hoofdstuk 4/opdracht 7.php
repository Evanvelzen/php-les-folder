<?php

$savings = 9;


if ($savings > 750 && $savings < 1000){

    $shortage = 1000 - $savings;
    echo "het is bijna gelukt maar je komt €$shortage te kort.";
} elseif($savings < 750){

    $shortage = 1000 - $savings;
    echo "misschien kun je beter iets van werk zoeken je komt namelijk €$shortage te kort";
} else {
    $extra = $savings - 1000;

    echo "je hebt genoeg om de nieuwste iphone te kopen, sterker nog je hebt €$extra over";
}
