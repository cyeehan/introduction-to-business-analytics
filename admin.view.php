<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location: admin.login.php');
}
//$user_id=$_SESSION['id'];
//$user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
//$user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
//$no_of_user_products= mysqli_num_rows($user_products_result);
$get_user_id = "select id from users";
$get_user_result = mysqli_query($con, $get_user_id) or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png"/>
    <title>Admin View - Dashboard</title>
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
    require 'admin.header.php';
    ?>
    <br>
    <!-- Customer accounts -->
    <div class="container" style="height: 60%; margin-top: 30px">
        <h1 style="color: black; font-weight: bold; font-size: 30px; text-decoration: underline">Dashboard Page</h1>
        <br>
        <table class="table table-bordered table-striped" style="margin-top: 30px; font-size: 17px">
            <tbody>
            <tr>
                <th>Item No.</th>
                <th>User ID</th>
                <th>User Name</th>
                <th>User IC</th>
                <th>User Email</th>
                <th>Password</th>
                <th>Contact</th>
                <th></th>
            </tr>
            <h1 style="color: black; font-weight: bold">Customer Accounts</h1>
            <?php
            $counter = 1;

            $get_user_info = "select
            users.id, users.name, users.ic_passport, email,users.password, contact
            from users";
            $get_user_result = mysqli_query($con, $get_user_info) or die(mysqli_error($con));

            while ($row = mysqli_fetch_array($get_user_result)) {
                ?>
                <tr>
                    <th><?php echo $counter ?></th>
                    <th><?php echo $row[0] ?></th>
                    <th><?php echo $row[1] ?></th>
                    <th><?php echo $row[2] ?></th>
                    <th><?php echo $row[3] ?></th>
                    <th><?php echo $row[4] ?></th>
                    <th><?php echo $row[5] ?></th>
                    <th><a href='admin.user.remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                    <!-- <th><a href='qcart.update.php?id=<?php echo $row['users.id'] ?>'>Remove</a></th> -->

                </tr>
                <?php $counter = $counter + 1;
            } ?>
            <tr>

            </tr>
            </tbody>
        </table>
    </div>

    <!-- Confirmed order -->
    <div class="container" style="height: 60%; margin-top: 30px">
        <table class="table table-bordered table-striped" style="margin-top: 30px; font-size: 17px">
            <tbody>
            <tr>
                <th>Item No.</th>
                <th>User ID</th>
                <th>User Name</th>
                <th>Item ID</th>
                <th>Destination</th>
                <th>Price (RM)</th>
                <th>Status</th>
                <th></th>
            </tr>
            <h1 style="color: black; font-weight: bold">Customer (Confirmed) Orders</h1>
            <?php

            $counter = 1;

            $get_user_id = "select
            users.id, users.name, users_items.id, items.name, items.price, users_items.status
            from users
            join users_items on users.id = users_items.user_id
            join items on users_items.item_id = items.id where status = 'Confirmed'";
            $get_user_result = mysqli_query($con, $get_user_id) or die(mysqli_error($con));

            while ($row = mysqli_fetch_array($get_user_result)) {
                $user_id = $row[0];
                $item_id = $row[2];
                ?>

                <tr>
                    <th><?php echo $counter ?></th>
                    <th><?php echo $user_id ?></th>
                    <th><?php echo $row[1] ?></th>
                    <th><?php echo $item_id ?></th>
                    <th><?php echo $row[3] ?></th>
                    <th><?php echo $row[4] ?></th>
                    <th><?php echo $row[5] ?></th>
                    <th>
                        <a href='admin.records.remove.php?id1=<?php echo $user_id ?>&id2=<?php echo $item_id ?>'>Remove</a>
                    </th>
                    <!-- <th><a href='qcart.update.php?id1=<?php echo $user_id ?>&id2=<?php echo $item_id ?>'>Remove</a></th> -->

                </tr>
                <?php $counter = $counter + 1;
            } ?>
            </tbody>
        </table>
    </div>

    <!-- Added To Cart Orders -->
    <div class="container" style="height: 60%; margin-top: 30px">
        <table class="table table-bordered table-striped" style="margin-top: 30px; font-size: 17px">
            <tbody>
            <tr>
                <th>Item No.</th>
                <th>User ID</th>
                <th>User Name</th>
                <th>Item ID</th>
                <th>Destination</th>
                <th>Price (RM)</th>
                <th>Status</th>
                <th></th>
            </tr>
            <h1 style="color: black; font-weight: bold">Customer (Added To Cart) Orders</h1>
            <?php
            $counter = 1;

            $get_user_id = "select
            users.id, users.name, users_items.id, items.name, items.price, users_items.status
            from users
            join users_items on users.id = users_items.user_id
            join items on users_items.item_id = items.id where status = 'added to cart'";
            $get_user_result = mysqli_query($con, $get_user_id) or die(mysqli_error($con));

            while ($row = mysqli_fetch_array($get_user_result)) {
                $user_id = $row[0];
                $item_id = $row[2];
                ?>

                <tr>
                    <th><?php echo $counter ?></th>
                    <th><?php echo $user_id ?></th>
                    <th><?php echo $row[1] ?></th>
                    <th><?php echo $item_id ?></th>
                    <th><?php echo $row[3] ?></th>
                    <th><?php echo $row[4] ?></th>
                    <th><?php echo $row[5] ?></th>
                    <th>
                        <a href='admin.records.remove.php?id1=<?php echo $user_id ?>&id2=<?php echo $item_id ?>'>Remove</a>
                    </th>
                    <!-- <th><a href='qcart.update.php?id1=<?php echo $user_id ?>&id2=<?php echo $item_id ?>'>Remove</a></th> -->

                </tr>
                <?php $counter = $counter + 1;
            } ?>
            </tbody>
        </table>
    </div>

    <br><br><br><br><br><br><br><br><br><br>
    <?php
    require 'admin.footer.php';
    ?>
</body>
</html>
