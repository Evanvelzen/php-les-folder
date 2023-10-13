<?php
try {
    $db = new PDO('mysql:host=localhost; dbname=klas', "root", "");
    $query = $db -> prepare('SELECT * FROM klas');
    $hogste = $db -> prepare("SELECT MAX(cijfer) AS cijfer  FROM klas");
    $laagste = $db -> prepare("SELECT MIN(cijfer) AS cijfer FROM klas");
    $gem = $db -> prepare("SELECT AVG(cijfer) AS cijfer FROM klas");
    $query->execute();
    $hogste -> execute();
    $laagste -> execute();
    $gem -> execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $uitkomst = $hogste->fetchAll(PDO::FETCH_ASSOC);
    $uitslag = $laagste -> fetchAll(PDO::FETCH_ASSOC);
    $gemidelden = $gem->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $data ) {
        echo $data['leerling'] . " ";
        echo $data['cijfer'] . "<br>";
    }
    foreach ($gemidelden as $data){
        echo "Het gemiddelde cijfer is een ".number_format($data['cijfer'],1)."<br>";
    }
    foreach ($uitkomst as $data){
        echo "Het hoogste cijfer is een ". $data['cijfer']."<br>";
    }
    foreach ($uitslag as $data){
        echo "Het laagste cijfer is een ".$data['cijfer']."<br>";
    }

}catch (PDOException $e){
    die("error! ".$e -> getMessage());
}

?>