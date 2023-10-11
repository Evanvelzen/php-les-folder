<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=fietsen",
        "root", "");
   
} catch (PDOException $e) {
    die(("ik ben stuk help mij " . $e->getMessage()));
}
?>