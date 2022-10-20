<?php
$host = 'localhost';
$database = 'tecnoweb';
$userName = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$database",$userName, $password);
} catch (PDOException $ex) {
    echo("No se logro conectar $ex");
}
?>