<?php
session_start();

$_SESSION['visit'] += 1;

echo "je hebt deze pagina al " . $_SESSION['visit'] . " bekeken <br>";
echo "voordat je de browser heb afgesloten <br>";


if (isset($_COOKIE['totalVisits'])) {
    $value = $_COOKIE['totalVisits'];
    $value1 = $value + 1;

    setcookie("totalVisits", $value1, time() + 3600);


} else {
    setcookie("totalVisits", $_SESSION['visit'], time() + 3600);

}

echo "in totaal heb je de site al: " . $_COOKIE['totalVisits'] . "bekeken";






