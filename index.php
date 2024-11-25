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

    <!-- navbar -->
    <?php include('navbar.php'); ?>

    <!-- home -->
    <section id="home" class="d-flex align-items-center" style="background: url('https://static.tildacdn.com/tild3966-3431-4064-b665-353330313861/7.jpg') no-repeat center center/cover; height: 100vh;">
        <div class="container text-center">
            <h1 class="display-4">Bem-vindo à Eshop</h1>
            <p class="lead">Oferecemos os melhores produtos pelos preços mais acessíveis</p>
            <a href="shop.php" class="btn btn-primary">Compre Agora</a>
        </div>
    </section>

    <!-- featured products -->
    <section id="featured" class="my-5">
        <div class="container text-center">
            <h2 class="section-title">Produtos em Destaque</h2>
            <p class="section-subtitle">Confira nossos produtos mais populares</p>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Produto">
                        <div class="card-body">
                            <h5 class="card-title">Produto 1</h5>
                            <p class="card-text">R$ 199,90</p>
                            <a href="single_product.php?id=1" class="btn btn-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
                <!-- Repita para outros produtos -->
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php'); ?>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>