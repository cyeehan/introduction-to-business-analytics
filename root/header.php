<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Basic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Han+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candal">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Francois+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Carousel.css">
    <link rel="stylesheet" href="assets/css/Corporate-Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet"
          href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/MUSA_navbar-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_navbar.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Parallax-Scroll-Effect.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md sticky-top bounce animated navigation-clean">
    <div class="container-fluid"><a class="navbar-brand d-xl-flex justify-content-xl-start"
                                    href="https://www.eticketing.my/" target="_blank"></a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
        <div
                class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mx-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="popular.destination.php">Popular
                        Destinations</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="products.php">Bus tickets</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="bus.company.php">Bus Companies</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <!-- <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li> -->
                    <!-- <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li> -->
                    <!-- <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> -->
                    <li class="nav-item" role="presentation"><a class="user-session "
                                                                style="font-size: 12px; color: black; background-color: orange">
                            <?php
                            echo $_SESSION['email'];
                            ?>
                        </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="cart.php">ACCOUNT</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php">LOGOUT</a></li>

                    <?php
                } else {
                    ?>

                    <li class="nav-item" role="presentation"><a class="nav-link" href="user.signup.php">SIGN UP</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="user.login.php">LOGIN</a></li>

                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

</body>

</html>