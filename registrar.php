<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

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
    <?php include ('navbar.php'); ?>


    <!-- register -->
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Registro</h2>
            <hr>
        </div>
        <div class="mx-auto container">
            <form id="register-form" action="./server/register.php" method="post">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="register-email" name="name" placeholder="nome" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="register-email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" id="register-password" name="password" placeholder="Senha" required>
                </div>
                <div class="form-group">
                    <label>Confirmar Senha</label>
                    <input type="password" class="form-control" id="register-confirm-password" name="confirmPassword" placeholder="Confirmar Senha" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn" id="register-btn" value="register" />
                </div>
                <div class="form-group">
                    <a href="./logar.php" id="login-url" class="btn">Já tem uma conta?<span> Login</span></a>
                </div>
            </form>
        </div>
    </section>

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