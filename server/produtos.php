<?php

function getProdutos() {
    // Configuração da conexão
    $host = 'localhost';
    $dbname = 'ecommerce';
    $user = 'root';
    $password = '';

    try {
        // Criando a conexão com o banco de dados
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consultando os produtos
        $sql = "SELECT * FROM produtos";
        $stmt = $pdo->prepare($sql); // Prepara a consulta
        $stmt->execute(); // Executa a consulta
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retorna os resultados como array associativo
    } catch (PDOException $e) {
        // Lida com erros de conexão ou execução
        die('Erro ao conectar ou consultar o banco de dados: ' . $e->getMessage());
    }
}
