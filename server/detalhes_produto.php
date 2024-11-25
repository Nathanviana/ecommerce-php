<?php
function getProdutoPorId($id) {
    $host = 'localhost';
    $dbname = 'ecommerce';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM produtos WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die('Erro ao conectar ou consultar o banco de dados: ' . $e->getMessage());
    }
}

// Obtém o ID do produto da URL
if (isset($_GET['id'])) {
    $produto = getProdutoPorId($_GET['id']);
} else {
    die('Produto não encontrado.');
}
