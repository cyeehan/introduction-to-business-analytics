<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png"/>
    <title>Logged Out</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
</head>
<body>
<div>
    <?php
    require 'header.php';
    ?>
    <div class="form-group login-form-group"
         style="text-align: center;height: 100vh;margin: 0; background-image: url('assets/img/img-index-0.jpg');">
        <body>
        <form class="form-login" method="post" action="user.login.submit.php">

            <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200" id="header-login-1"></h1>
            <div data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150" id="new-joiner-form"
                 style="text-align: center;display: inline-block;width: 30%;margin-top: 100px;">
                <form id="login-info">
                    <h1 class="text-center" id="register-form">You have been logged out.</h1>
                    <br><br><br><br>
                    <p style="font-size: 30px;"><a href="user.login.php">Login again?</a></p>
                </form>
            </div>
        </form>
    </div>
    <?php
    require 'footer.php';
    ?>
</div>
</body>
</html>
