<?php
include('./server/detalhes_produto.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single product</title>

    <!-- font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

    <!-- navbar -->
    <?php include('navbar.php'); ?>


    <!-- single product -->
    <section class="container single-product my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <img src="<?php echo $produto['imagem_url']; ?>" alt="Imagem do Produto" class="img-fluid w-100 pb-1" id="mainImg">
                <!-- Se desejar, adicione mais imagens relacionadas ao produto -->
            </div>

            <div class="col-lg-6 col-md-12 col-12">
                <h6><?php echo $produto['categoria']; ?></h6>
                <h3 class="py-4"><?php echo $produto['nome']; ?></h3>
                <h2>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></h2>
                <form action="./server/adicionar_carrinho.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
                    <input type="hidden" name="nome" value="<?php echo $produto['nome']; ?>">
                    <input type="hidden" name="preco" value="<?php echo $produto['preco']; ?>">
                    <input type="hidden" name="imagem_url" value="<?php echo $produto['imagem_url']; ?>">
                    <input type="number" name="quantidade" value="1" min="1">
                    <button type="submit" class="btn buy-btn">Adicionar ao Carrinho</button>
                </form>
                <h4 class="mt-5 mb-5">Detalhes do Produto</h4>
                <span><?php echo $produto['descricao']; ?></span>
            </div>
        </div>
    </section>


    <!-- realated products -->
    <section id="realated-products" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Our Featured Products</h3>
            <hr class="mx-auto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid md-3" src="" alt="">

                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">199.8</h4>
                <button class="buy-btn">Buy Now</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid md-3" src="" alt="">

                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">199.8</h4>
                <button class="buy-btn">Buy Now</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid md-3" src="" alt="">

                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">199.8</h4>
                <button class="buy-btn">Buy Now</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid md-3" src="" alt="">

                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">199.8</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
        </div>
    </section>

    <!--Footer-->
    <?php include('footer.php'); ?>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script>
        var mainImg = document.getElementById('mainImg');
        var smallImg = document.getElementsByClassName('small-img');

        for (let i = 0; i < 4; i++) {
            smallImg[i].onclick = function() {
                mainImg.src = smallImg[i].src;
            }
        }
    </script>
</body>

</html>