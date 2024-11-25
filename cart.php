<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$carrinho = $_SESSION['carrinho'] ?? [];
$total = 0;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>

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

    <!-- cart -->
    <section class="cart container my-5 py-5">
        <h2 class="section-title">Seu Carrinho</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço Unitário</th>
                    <th>Subtotal</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            if (count($carrinho) > 0): 
                foreach ($carrinho as $item): 
                    $subtotal = $item['quantidade'] * $item['preco'];
                    $total += $subtotal;
            ?>
                <tr>
                    <td><img src="<?php echo $item['imagem_url']; ?>" alt="<?php echo $item['nome']; ?>" width="50"></td>
                    <td><?php echo $item['nome']; ?></td>
                    <td>
                        <form action="server/adicionar_carrinho.php" method="POST">
                            <input type="hidden" name="action" value="atualizar">
                            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                            <input type="number" name="quantidade" value="<?php echo $item['quantidade']; ?>" min="1">
                            <button type="submit" class="btn btn-sm btn-primary">Atualizar</button>
                        </form>
                    </td>
                    <td>R$ <?php echo number_format($item['preco'], 2, ',', '.'); ?></td>
                    <td>R$ <?php echo number_format($subtotal, 2, ',', '.'); ?></td>
                    <td>
                        <a href="server/adicionar_carrinho.php?action=remover&id=<?php echo $item['id']; ?>" class="btn btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            <?php 
                endforeach;
            else: 
            ?>
                <tr>
                    <td colspan="6">Seu carrinho está vazio.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
        <a href="checkout.php" class="mt-3 btn btn-primary">Finalizar Compra</a>
    </section>

    <!-- footer -->
    <?php include('footer.php'); ?>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>