<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Simulação de dados do pedido
$numeroPedido = rand(1000, 9999);
$enderecoEntrega = $_SESSION['endereco_entrega'] ?? 'Endereço não fornecido';
$frete = $_SESSION['frete'] ?? 0;
$carrinho = $_SESSION['carrinho'] ?? [];
$total = 0;
foreach ($carrinho as $item) {
    $total += $item['quantidade'] * $item['preco'];
}
$totalComFrete = $total + $frete;

// Limpar o carrinho após a compra
unset($_SESSION['carrinho']);
unset($_SESSION['endereco_entrega']);
unset($_SESSION['frete']);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra Confirmada</title>

    <!-- font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    
    <!-- navbar -->
    <?php include('navbar.php'); ?>

    <!-- Compra Confirmada -->
    <section class="confirmation container my-5 py-5 text-center">
        <h2 class="section-title">Compra Confirmada!</h2>
        <p class="lead">Obrigado por sua compra. Seu pedido foi confirmado com sucesso.</p>
        <p><strong>Número do Pedido:</strong> <?php echo $numeroPedido; ?></p>
        <p><strong>Endereço de Entrega:</strong> <?php echo $enderecoEntrega; ?></p>
        
        <!-- Resumo dos Itens Comprados -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="mb-4">Resumo dos Itens Comprados</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Preço Unitário</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($carrinho as $item): ?>
                        <tr>
                            <td><?php echo $item['nome']; ?></td>
                            <td><?php echo $item['quantidade']; ?></td>
                            <td>R$ <?php echo number_format($item['preco'], 2, ',', '.'); ?></td>
                            <td>R$ <?php echo number_format($item['quantidade'] * $item['preco'], 2, ',', '.'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <p><strong>Total:</strong> R$ <?php echo number_format($totalComFrete, 2, ',', '.'); ?></p>
            </div>
        </div>

        <a href="index.php" class="btn btn-primary mt-4">Voltar à Página Inicial</a>
    </section>

    <!-- footer -->
    <?php include('footer.php'); ?>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>