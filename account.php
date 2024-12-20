<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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


    <!-- account -->
    <section class="my-5 py-5">
        <div class="row container mx-auto">
            <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
                <h3 class="font-weight-bold">Infromações da conta</h3>
                <hr class="mx-auto">
                <div class="account-info">
                    <p>Names<span>John</span></p>
                    <p>Names<span>John@email.com</span></p>
                    <p><a href="" id="orders-btn">Your orders</a></p>
                    <p><a href="" id="logout-btn">Logout</a></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <form id="account-form">
                    <h3>Change Password</h3>
                    <hr class="mx-auto">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="account-password" name="password"
                            placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="account-password-confirm" name="confirmPassword"
                            placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Change Password" class="btn" id="change-pass-btn">
                    </div>
                </form>
            </div>

        </div>
    </section>

    <!-- pedidos -->
    <section class="orders container my-5 py-3">
        <div class="container mt-2">
            <h2 class="font-weight-bolde text-center">Seus Pedidos</h2>
            <hr class="mx-auto">
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>Produto</th>
                <th>Dados</th>
            </tr>
            <tr>
                <td>
                    <div class="product-info">
                        <img
                            src="data:image/jpeg;base64,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">
                        <div>
                            <p class="mt-03" >brown Shoes</p>
                        </div>
                    </div>
                </td>
                <td>
                    <span>2036-6-8</span>
                </td>
            </tr>
        </table>

    </section>

    <!--Footer-->
    <?php include('footer.php'); ?>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>