<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['endereco']) && isset($data['frete'])) {
    $_SESSION['endereco_entrega'] = $data['endereco'];
    $_SESSION['frete'] = $data['frete'];
}
?>