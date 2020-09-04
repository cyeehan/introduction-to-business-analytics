<?php
//require 'connection.php';
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>User Login</title>
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


<div>

    <div class="form-group login-form-group"
         style="text-align: center;height: 100vh;margin: 0; background-image: url('assets/img/img-index-0.jpg');">
        <body>
        <?php
        require 'header.php';
        ?>
        <form class="form-login" method="post" action="user.login.submit.php">

            <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200" id="header-login-1"></h1>
            <div data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150" id="new-joiner-form"
                 style="text-align: center;display: inline-block;width: 30%;margin-top: 100px;">
                <form id="login-info">
                    <h1 class="text-center" id="register-form">User Login</h1>
                    <div class="form-group"><input class="form-control login-textbox" type="email" name="email"
                                                   data-toggle="tooltip" data-bs-tooltip="" placeholder="*Email Address"
                                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></div>
                    <div class="form-group"><input class="form-control" type="password" name="password"
                                                   data-toggle="tooltip" placeholder="*Password" required="true">
                        <div class="panel-footer">Don't have an account yet? <a href="user.signup.php">Register</a>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg text-center btn-login" type="submit" value="Login">LOGIN
                    </button>
                </form>
            </div>
        </form>
    </div>
</div>

<?php
require 'footer.php';
?>
</body>

</html>