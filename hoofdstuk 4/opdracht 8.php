<?php

$age =  18;
$votePass = false;

if ($age >= 16){

    echo "je mag het praktijkexamen doen voor het AM rijbewijs <br>";
} else {
    echo "je mag geen examen doen <br>";
}

if ($age < 18){

    echo "je mag nog niet stemmen, je bent te jong<br>";
}
 elseif ($age >= 18 && $votePass == false){
    echo"je hebt geen stempas, dus je mag niet stemmen. de volgende keer beter<br>";
}
elseif ($age >= 18 && $votePass == true){
    echo "je mag stemmen, ga je demoncratische plicht uitvoeren <br>";}

