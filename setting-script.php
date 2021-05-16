<?php
include 'include\common.php';
$old_pass=mysqli_real_escape_string($con,$_POST['old-password']);
$new_pass=mysqli_real_escape_string($con,$_POST['new-password']);
$retype_pass=mysqli_real_escape_string($con,$_POST['retype-password']);
if(($retype_pass)!= ($new_pass)){
    echo "<script>
alert('new password not matched with retype password');
window.location.href='setting.php';
</script>";
}
else{
$pass=md5($new_pass);
$opass=md5($old_pass);
$email=$_SESSION['email'];
$select_query=("select password from users where email='$email'");
$result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
$passo=$row['password'];
if($passo==$opass){
    $select_query=("update users set password='$pass' where email='$email'");
    $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
    echo "<script>
alert('password successfully changed');
window.location.href='product.php';
</script>";
}
else{
    echo "<script>
alert('wrong old password');
window.location.href='setting.php';
</script>";
}
}
?>

