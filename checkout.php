<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$carrinho = $_SESSION['carrinho'] ?? [];
$total = 0;
foreach ($carrinho as $item) {
    $total += $item['quantidade'] * $item['preco'];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

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

    <!--Checkout-->
    <section class="checkout container my-5 py-5">
        <h2 class="mb-4">Checkout</h2>
        
        <!-- Itens do Carrinho -->
        <div class="row mb-5">
            <div class="col-md-8">
                <h4>Itens do Carrinho</h4>
                <table class="table">
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
                <p><strong>Total:</strong> R$ <?php echo number_format($total, 2, ',', '.'); ?></p>
            </div>
        </div>

        <!-- Calcular Frete -->
        <div class="row mb-5">
            <div class="col-md-8">
                <h4>Calcular Frete</h4>
                <form id="freteForm">
                    <div class="mb-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep" required>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="calcularFrete()">Calcular Frete</button>
                </form>
                <div id="freteResultado" class="mt-3"></div>
            </div>
        </div>

        <!-- Total com Frete -->
        <div class="row mb-5">
            <div class="col-md-8">
                <h4>Total com Frete</h4>
                <p id="totalComFrete"><strong>Total:</strong> R$ <?php echo number_format($total, 2, ',', '.'); ?></p>
            </div>
        </div>

        <!-- Finalizar Compra -->
        <div class="row">
            <div class="col-md-8">
                <a href="finalizar_compra.php" class="btn btn-success">Finalizar Compra</a>
            </div>
        </div>
    </section>

    <!--Footer-->
    <?php include('footer.php'); ?>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Script para calcular frete -->
    <script>
        function calcularFrete() {
            const cep = document.getElementById('cep').value;
            if (cep.length !== 8) {
                alert('Por favor, insira um CEP válido.');
                return;
            }

            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => response.json())
                .then(data => {
                    if (data.erro) {
                        alert('CEP não encontrado.');
                        return;
                    }

                    // Simulação de cálculo de frete
                    const frete = Math.floor(Math.random() * (100 - 10 + 1)) + 10; // Valor aleatório de frete entre 10 e 100
                    const total = <?php echo $total; ?>;
                    const totalComFrete = total + frete;

                    // Armazenar endereço e frete na sessão
                    fetch('server/armazenar_endereco_frete.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            endereco: `${data.logradouro}, ${data.bairro}, ${data.localidade} - ${data.uf}`,
                            frete: frete
                        })
                    });

                    document.getElementById('freteResultado').innerHTML = `
                        <p>Endereço: ${data.logradouro}, ${data.bairro}, ${data.localidade} - ${data.uf}</p>
                        <p>Frete: R$ ${frete.toFixed(2).replace('.', ',')}</p>
                    `;
                    document.getElementById('totalComFrete').innerHTML = `<strong>Total com Frete:</strong> R$ ${totalComFrete.toFixed(2).replace('.', ',')}`;
                })
                .catch(error => {
                    console.error('Erro ao buscar o CEP:', error);
                    alert('Erro ao buscar o CEP.');
                });
        }
    </script>
</body>

</html>