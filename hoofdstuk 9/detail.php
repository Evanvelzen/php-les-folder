<?php

include("database.php");
global $db;
$query = $db->prepare("SELECT * FROM fietsen WHERE id = " . $_GET['id']);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $data) {
    echo "Artikelnummer: " . $data["id"] . "<br>";
    echo "Merk: " . $data['merk'] . "<br>";
    echo "Type: " . $data['type'] . "<br>";
    echo "prijs: euro: " . number_format($data['prijs'], 2, ",", ".") . "<br> <br>";
}
?>