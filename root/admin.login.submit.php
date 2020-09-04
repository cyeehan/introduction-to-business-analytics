<?php
require 'connection.php';
session_start();

$admin_email_address = $_REQUEST['email'];
$admin__password = $_REQUEST['password'];

//if($rows_fetched==0){
if ($admin_email_address != 'eticketing@admin.my' || $admin__password != "admin") {
    //no user
    //redirecting to same login page
    ?>
    <script>
        window.alert("Wrong username or password!");
    </script>
    <meta http-equiv="refresh" content="1;url=admin.login.php"/>
    <?php
    //header('location: login');
    //echo "Wrong email or password.";
} else {
    ?>
    <?php
    //$row=mysqli_fetch_array($user_authentication_result);
    $row = '101';
    $_SESSION['email'] = $admin_email_address;
    $_SESSION['id'] = $row['id'];  //user id
    header('location: admin.view.php');
}


?>