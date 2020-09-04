<?php
require 'connection.php';
session_start();
$user_id = $_GET['id'];
//$users_id=$_SESSION['id'];
$delete_query = "delete from users where users.id = '$user_id'";
$delete_query_result = mysqli_query($con, $delete_query) or die(mysqli_error($con));
header('location: admin.view.php');
?>