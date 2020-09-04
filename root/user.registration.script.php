<?php
require 'connection.php';
session_start();
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
    //echo "Incorrect email. Redirecting you back to registration page...";
    ?>
    <script> type = "text/javascript" > alert("Incorrect email. Redirecting you back to registration page...") </script>
    <?php
    ?>
    <meta http-equiv="refresh" content="2;url=user.signup.php"/>
    <?php
}
$password = md5(md5(mysqli_real_escape_string($con, $_POST['password'])));
//$password2=md5(md5(mysqli_real_escape_string($con,$_POST['password2'])));

if (strlen($password) < 6) {
    echo '<script type="text/javascript"> alert("Password should have at least 6 characters. Redirecting you back to registration page...") </script>';
    ?>
    <meta http-equiv="refresh" content="2;url=user.signup.php"/>
    <?php
}


$contact = $_POST['contact'];
//$contact=$_POST['contact'];
$ic_passport = mysqli_real_escape_string($con, $_POST['ic_passport']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$agreement = mysqli_real_escape_string($con, $_POST['agreement']);

$duplicate_user_query = "select id from users where email='$email'";
$duplicate_user_result = mysqli_query($con, $duplicate_user_query) or die(mysqli_error($con));
$rows_fetched = mysqli_num_rows($duplicate_user_result);
if ($rows_fetched > 0) {
    //duplicate registration
    //header('location: signup.php');
    ?>
    <script>
        window.alert("Email is already existed.");
    </script>
    <meta http-equiv="refresh" content="1;url=user.signup.php"/>
    <?php
} else {
    $user_registration_query = "insert into users(name,ic_passport,password,email,contact,agreement) values ('$name','$ic_passport','$password','$email','$contact','$agreement')";
    //die($user_registration_query);
    $user_registration_result = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    //echo "User successfully registered";
    ?>
    <script> window.alert("Your account is successfully registered.");</script>

    <?php
    $_SESSION['email'] = $email;
    //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
    $_SESSION['id'] = mysqli_insert_id($con);
    //header('location: products.php');  //for redirecting
    ?>
    <meta http-equiv="refresh" content="3;url=products.php"/>
    <?php
}

?>