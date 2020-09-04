<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
} else {
    $user_id = $_GET['id'];
    $confirm_query = "update users_items set status='Confirmed' where user_id=$user_id";
    $confirm_query_result = mysqli_query($con, $confirm_query) or die(mysqli_error($con));

}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png"/>
    <title>Thank You For Choosing Us</title>
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
                 style="text-align: center;display: inline-block;width: 100%;margin-top: 100px;">
                <form id="login-info">
                    <h1 class="text-center" id="register-form">Thank you for choosing
                        us, <?php echo $_SESSION['email'] ?>.</h1><br>
                    <h1 class="text-center" id="register-form">We have received your order.</h1>
                    <h1 class="text-center" id="register-form">Please check your email to make payment.</h1>

                    <br><br><br><br>
                    <p style="font-size: 30px;"><a href="index.php">Click here to home page</a></p>
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
