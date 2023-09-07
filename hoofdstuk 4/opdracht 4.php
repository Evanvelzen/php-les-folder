<?php
$oldPrice = 55;

if ($oldPrice >= 150){
    $newPrice = $oldPrice / 100 * 119;

    echo "oude prijs = €$oldPrice. Na verhoging van 19% is de prijs: €$newPrice";
} elseif ($oldPrice <= 55){

    $newPrice = $oldPrice / 100 * 111;

    echo "oude prijs = €$oldPrice. Na verhoging van 11% is de prijs: €$newPrice";
} else{
    $newPrice = $oldPrice / 100 * 116;

    echo "oude prijs = €$oldPrice. Na verhoging van 16% is de prijs: €$newPrice";
}

