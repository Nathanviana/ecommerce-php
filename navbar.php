<!-- navbar.php -->
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand me-auto" href="#">Logo</a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="suporte.php">Suporte</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Login / Nome do Usuário -->
        <?php if (isset($_SESSION['user_name'])): ?>
            <span class="navbar-text mx-lg-2">Olá, <?= htmlspecialchars($_SESSION['user_name']); ?></span>
            <a href="./server/logout.php" class="btn btn-outline-danger mx-lg-2">Logout</a>
        <?php else: ?>
            <a href="registrar.php" class="login-button mx-lg-2"><i class="fa-solid fa-user"></i></a>
        <?php endif; ?>
        
        <!-- Carrinho -->
        <a class="shopcart-button mx-lg-2" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>


        <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
