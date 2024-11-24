<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'] ?? null;
    $senha = $_POST['password'] ?? null;

    if ($email && $senha) {
        $sql = "SELECT * FROM clientes WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($senha, $user['senha'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nome'];
            header('Location: ../index.php');
            exit;
        } else {
            echo "Email ou senha inválidos.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
?>
