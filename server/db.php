<?php
$host = "localhost";
$db = "ecommerce";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}
?>
