<?php
try {
    $db = new PDO('mysql:host=localhost; dbname=klas', "root", "");
    $query = $db -> prepare('SELECT * FROM klas');
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $data ) {
        echo $data['leerling'] . " ";
        echo $data['cijfer'] . "<br>";
    }
}catch (PDOException $e){
    die("error! ".$e -> getMessage());
}
?>