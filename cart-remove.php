<?php  include 'include\common.php';        
$id=mysqli_real_escape_string($con,$_GET['id']);
$select_query=("DELETE FROM users_items WHERE users_items.ui_id ='$id'");
$result=mysqli_query($con,$select_query) or die(mysqli_error($con));
header('location: cart.php');
?>