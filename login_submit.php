<?php
include 'include\common.php';
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$pass=md5($password);
$select_query=("select id,email from users where email='$email' && password='$pass' ")or die(mysqli_error($con));
$result=mysqli_query($con,$select_query);
if(mysqli_num_rows($result)==0){
    echo "<script>
alert('wrong email or password');
window.location.href='login.php';
</script>";
}
else{
    $row=  mysqli_fetch_array($result);
    $_SESSION['email']=$email;
    $_SESSION['user_id']=mysqli_insert_id($con);
     header('location: product.php');
}
        

?>




