<?php
include('./server/produtos.php'); // Inclui o arquivo de produtos
$produtos = getProdutos(); // Obtém os produtos do banco
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Produtos -->
    <section id="featured" class="my-5 pb-5">
        <div class="container mt-5 py-5">
            <h3>Our Products</h3>
            <hr>
            <p>Explore the best products available in our shop.</p>
        </div>
        <div class="row mx-auto container">
            <?php foreach ($produtos as $produto): ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img src="<?php echo $produto['imagem_url']; ?>">

                    <h5 class="p-name"><?php echo $produto['nome']; ?></h5>
                    <h4 class="p-price">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>
