<?php
require 'connection.php';
session_start();
$user_id = $_GET['id1'];
$transaction_id = $_GET['id2'];
$delete_query = "delete from users_items where users_items.user_id ='$user_id' and users_items.id = '$transaction_id'";

$delete_query_result = mysqli_query($con, $delete_query) or die(mysqli_error($con));
header('location: admin.view.php');
?>