<?php
function check_if_add_to_cart($item_id){
    $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
    $email=$_SESSION['email'];
    $select_query=("select id from users where email='$email'");
    $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($result);
    $user_id=$row['id'];
     $select_query=("SELECT * FROM users_items WHERE items_id='$item_id' && user_id ='$user_id' && status='add to cart'")or die(mysqli_error($con));
     $result=mysqli_query($con,$select_query);
     if(mysqli_num_rows($result)>0){
    return 1;
} else{
    return 0;
}
}
?>

