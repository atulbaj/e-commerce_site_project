<?php  include 'include\common.php';        ?>
<?php if (isset($_SESSION['email'])){ ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php 
$email=$_SESSION['email'];
$select_query=("select id from users where email='$email'");
$result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
$user_id=$row['id'];
$select_query=("SELECT * FROM items INNER JOIN users_items ON users_items.items_id=items.pid where user_id='$user_id'");
$result=mysqli_query($con,$select_query) or die(mysqli_error($con));
if(mysqli_num_rows($result)==0){
    echo "<script>
alert('first add product into cart');
window.location.href='product.php';
</script>";
}
else{
    $sum=0;
    $num=0;
    while($row=mysqli_fetch_array($result)){
        $sum=$sum+$row['price'];
    }

?>
<html>
    <head>
        <title>Cart</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >



        <!-- jQuery library -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
 <?php include 'include\header.php'; ?>
        <br><br><br>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr><th>Item no.</th><th>Item name</th><th>Price</th><th>   </th>
                    </tr>
                 <?php 
                 $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
                 while($row=mysqli_fetch_array($result)){?>
                    <tr><td> <?php  echo $num+1; ?> </td><td><?php echo $row['name']; ?>  </td><td><?php echo $row['price'];  ?>  </td><td><a href="cart-remove.php?id=<?php echo $row['ui_id'];?>" class="remove_item_link">Remove</a> </td></tr><?php $num=$num+1; } ?>
                    <tr><td>  </td><td>Total</td><td><?php  echo $sum;   ?></td>
                        <td><a href="success.php"><button class="btn btn-primary">Confirm Order</button></a></td></tr>
                </tbody>
            </table>
        </div>
       <?php include 'include\footer.php'; ?>
    </body>
</html>
<?php } ?>
<?php } ?>
