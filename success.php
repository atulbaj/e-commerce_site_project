<?php  include 'include\common.php';        ?>
<?php if (isset($_SESSION['email'])) { 
    $email=$_SESSION['email'];
$select_query=("select id from users where email='$email'");
$result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
$user_id=$row['id'];
$select_query=("update users_items set status='confirmed' where user_id='$user_id'");
$result=mysqli_query($con,$select_query) or die(mysqli_error($con));
    
    ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Success</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >



        <!-- jQuery library -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php include 'include\header.php'; ?>
        <br> <br> <br>
         <div class="container">
        <div class="jumbotron">
             Your order is confirmed. Thank you for shopping with us.
             <a href="product.php"> click here</a> to purchase any other item.
        </div>
    </div>
        <?php include 'include\footer.php'; ?>
    </body>
</html>
<?php } else {
    header('location: index.php');
} ?>