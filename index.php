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
    <!-- <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand me-auto" href="#">logo</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" aria-current="page" href="shop.html">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="suporte.html">Suporte</a>
                    </ul>
                </div>
            </div>
      
             carrinho
            <a class="shopcart-button mx-lg-2" href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>

            <a href="account.html" class="login-button"><i class="fa-solid fa-user"></i></a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav> -->

    <?php include('navbar.php'); ?>

    <!-- home -->
    <section id="home">
        <div class="container">
            <h5>NEW ARRIVALS</h5>
            <h1><span>Best Prices</span> This Season</h1>
            <p>Eshop offfers the best products for the most affordable prices</p>
            <button>Shop Now</button>
        </div>
    </section>

    <!-- Brand -->
    <section id="brand" class="container">
        <div class="row">
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12"
                src="https://logomarcante.com.br/wp-content/uploads/2024/03/logo-da-chanel.jpg">
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12"
                src="https://logomarcante.com.br/wp-content/uploads/2024/03/logo-da-chanel.jpg">
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12"
                src="https://logomarcante.com.br/wp-content/uploads/2024/03/logo-da-chanel.jpg">
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12"
                src="https://logomarcante.com.br/wp-content/uploads/2024/03/logo-da-chanel.jpg">
        </div>
    </section>

    <!-- cards product -->
    <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <!-- card 01 -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="https://logomarcante.com.br/wp-content/uploads/2024/03/logo-da-chanel.jpg">
                <div class="details">
                    <h2>New Collection</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>

            <!-- card 02 -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="https://logomarcante.com.br/wp-content/uploads/2024/03/logo-da-chanel.jpg">
                <div class="details">
                    <h2>New Collection</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>

            <!-- card 03 -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="https://logomarcante.com.br/wp-content/uploads/2024/03/logo-da-chanel.jpg">
                <div class="details">
                    <h2>New Collection</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- featured -->
    <section id="featured" class="my-5 pb-5">
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

    <!--Banner-->
    <section id="banner" class="my-5 py-5">
        <div class="container">
            <h4>MID SEASON SALE</h4>
            <h1>Autumn Collection <br> UP to 30 off </h1>
            <button class="text-uppercase"> shop now </button>
        </div>
    </section>

    <!--Clothes-->
    <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3>Dresses e Coats</h3>
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

    <!-- adicionar conforme o nicho de produtos (repetir a seção de cima para fazer isso) -->

    <!--Footer-->
    <footer class="mt-5 py-5">

        <div class="row container mx-auto pt-5">
          <div class=" footer-one col-lg-3 col-md-6 col-sm-12">
                <p class="pt-3">We provide the best products for the most affordable prices</p>
          </div>
          <div class=" footer-one col-lg-3 col-md-6 col-sm-12">
           <h5 class="pb-2">Featured</h5>
           <ul class="text-uppercase">
            <li><a href="#">men</a></li>
            <li><a href="#">woman</a></li>
            <li><a href="#">boys</a></li>
            <li><a href="#">girls</a></li>
            <li><a href="#">new arrival</a></li>
            <li><a href="#">clothers</a></li>
           </ul>
        </div>

            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>1234 Street Name, City</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>121 324 2324</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>nathanbaker@gmail.com</p>
                </div>

            </div>

        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Instagram</h5>
          </div>    
        </div>



      <div class="copyright mt-5">
        <div class="row container mx-auto">
          <div class="col-lg-3 col-lg-5 col-md-12 mb-4">
            <p>&copy; 2024 Eshop. All rights reserved</p>
          </div>
          <div class="col-lg-3 col-md-5 col-md-12 mb-4 text-nowrap mb-4">
          </div> 
          <div class="col-lg-3 col-md-5 col-md-12 mb-4">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>     
        </div>
      </div>
        


    </footer>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>