<?php
try {
    $connection = new PDO('mysql:host=localhost:4306;dbname=rentaldb', "root", "");
} catch (PDOException $e) {
    print "Error!: ". $e->getMessage(). "<br/>";
    die();
}
?>