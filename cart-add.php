<?php
session_start();
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$items_id=mysqli_real_escape_string($con,$_GET['id']);
$email=$_SESSION['email'];
$select_query=("select id from users where email='$email'");
$result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
$user_id=$row['id'];
$select_query="INSERT INTO users_items (ui_id, user_id, items_id, status) VALUES (NULL, '$user_id','$items_id', 'add to cart')"or die(mysqli_error($con));
$result=mysqli_query($con,$select_query) or die(mysqli_error($con));
header('location: product.php');
?>


