<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location: user.login.php');
}
$user_id = $_SESSION['id'];
//select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'

$user_products_query_in_cart = "select items.name, items.time, items.price, user_id, item_id, users_items.id 
from items join users_items on items.id = users_items.item_id where user_id = $user_id and status = 'Added to cart'";

$user_products_query_confirmed = "select items.name, items.time, items.price, user_id, item_id, users_items.id, status
from items join users_items on items.id = users_items.item_id where user_id = $user_id and status = 'Confirmed'";


$user_products_result = mysqli_query($con, $user_products_query_in_cart) or die(mysqli_error($con));

$no_of_user_products = mysqli_num_rows($user_products_result);

$sum = 0;

if ($no_of_user_products == 0) {
    //echo "Add items to cart first.";
    ?>
    <script>
        window.alert("Your cart is empty.");
    </script>
    <?php
    header('location: cart.empty.php');
} else {
    while ($row = mysqli_fetch_array($user_products_result)) {
        $sum = $sum + $row['price'];
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png"/>
    <title>Account Page</title>
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
    <br>


    <div class="container" style="height: 60%; margin-top: 30px">

        <h1 style="color: black; font-weight: bold; font-size: 30px; text-decoration: underline">Account Page</h1>
        <table class="table table-bordered table-striped" style="margin-top: 30px; font-size: 17px">
            <tbody>
            <tr>
                <th>Item No.</th>
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Departure Time</th>
                <th>Price (RM)</th>
                <th></th>
            </tr>
            <h1 style="color: black; font-weight: bold">Your Shopping Cart</h1>
            <?php
            $user_products_result_in_cart = mysqli_query($con, $user_products_query_in_cart) or die(mysqli_error($con));
            $no_of_user_products_in_cart = mysqli_num_rows($user_products_result_in_cart);
            $counter = 1;
            while ($row = mysqli_fetch_array($user_products_result_in_cart)) {

                ?>
                <tr>
                    <th><?php echo $counter ?></th>
                    <th><?php echo $row['id'] ?></th>
                    <th><?php echo $row['name'] ?></th>
                    <th><?php echo $row['time'] ?></th>
                    <th><?php echo $row['price'] ?></th>
                    <!-- //<th> // <?php echo $row['item_id'] ?></th> -->
                    <!-- <th> //<?php echo $_SESSION['id'] ?></th> -->
                    <th><a href='cart.remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>

                </tr>
                <?php $counter = $counter + 1;
            } ?>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th>Total</th>
                <th>RM <?php echo $sum; ?></th>
                <th><a href="success.php?id=<?php echo $user_id ?>" class="btn btn-primary" style="font-size: 15px; ">Confirm
                        Order</a></th>

            </tr>
            </tbody>
        </table>
    </div>

    <!-- History -->
    <div class="container" style="height: 60%; margin-top: 30px">
        <table class="table table-bordered table-striped" style="margin-top: 30px; font-size: 17px">
            <tbody>
            <tr>
                <th>Item No.</th>
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Departure Time</th>
                <th>Price (RM)</th>
                <th>Order Status</th>
                <th></th>
            </tr>
            <h1 style="color: black; font-weight: bold">Your Confirmed Order History</h1>
            <?php
            $user_products_result_confirmed = mysqli_query($con, $user_products_query_confirmed) or die(mysqli_error($con));
            $no_of_user_products_confirmed = mysqli_num_rows($user_products_result_confirmed);
            $counter = 1;
            while ($row = mysqli_fetch_array($user_products_result_confirmed)) {

                ?>
                <tr>
                    <th><?php echo $counter ?></th>
                    <th><?php echo $row['id'] ?></th>
                    <th><?php echo $row['name'] ?></th>
                    <th><?php echo $row['time'] ?></th>
                    <th><?php echo $row['price'] ?></th>
                    <th><?php echo $row['status'] ?></th>
                    <!-- //<th> // <?php echo $row['item_id'] ?></th> -->
                    <!-- <th> //<?php echo $_SESSION['id'] ?></th> -->
                    <th><a href='cart.remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                </tr>
                <?php $counter = $counter + 1;
            } ?>

            </tbody>
        </table>
    </div>

    <!-- Account information -->
    <div class="container" style="height: 60%; margin-top: 30px">
        <h1 style="color: black; font-weight: bold">Your Account Info</h1>
        <table class="table table-bordered table-striped" style="margin-top: 30px; font-size: 17px">
            <tbody>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>IC/ Passport</th>
                <th>Email</th>
                <th>Contact</th>

            </tr>

            <?php
            $user_account_query = "select users.id, users.name, users.ic_passport, email,users.password, contact from users where users.id = $user_id";
            $user_account_result = mysqli_query($con, $user_account_query) or die(mysqli_error($con));
            //$no_of_user_products_in_cart= mysqli_num_rows($user_products_result_in_cart);
            $counter = 1;
            while ($row = mysqli_fetch_array($user_account_result)) {

                ?>
                <tr>
                    <th><?php echo $row['id'] ?></th>
                    <th><?php echo $row['name'] ?></th>
                    <th><?php echo $row['ic_passport'] ?></th>
                    <th><?php echo $row['email'] ?></th>
                    <th><?php echo $row['contact'] ?></th>
                    <!-- //<th> // <?php echo $row['item_id'] ?></th> -->
                    <!-- <th> //<?php echo $_SESSION['id'] ?></th> -->

                </tr>
                <?php $counter = $counter + 1;
            } ?>
            </tbody>
        </table>
    </div>

    <br><br><br><br><br><br><br><br><br><br>
    <?php
    require 'footer.php';
    ?>
</body>
</html>
