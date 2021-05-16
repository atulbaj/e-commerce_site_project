<?php

include 'include\common.php';
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['Email']);
$password=mysqli_real_escape_string($con,$_POST['Password']);
$pass=md5($password);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$select_query=("select id from users where email='$email'")or die(mysqli_error($con));
$result=mysqli_query($con,$select_query);
if(mysqli_num_rows($result)>0){
    echo "<script>
alert('This email is already exist');
window.location.href='signup.php';
</script>";
}
else{
  $insert_query=("INSERT INTO users (id, Name, email, password, contact,city, Address) VALUES (NULL, '$name', '$email', '$pass', '$contact', '$city', '$address');");
  $user_reg_submit=mysqli_query($con,$insert_query);
  $insert_id=mysqli_insert_id($con);
      $row=  mysqli_fetch_array($result);
    $_SESSION['email']=$email;
    $_SESSION['user_id']=$insert_id;
     header('location: product.php');
}
?>


