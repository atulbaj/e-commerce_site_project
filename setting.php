<?php  include 'include\common.php';        ?>
<?php if (isset($_SESSION['email'])) { ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>setting</title>
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
            <h1>Change Password</h1>
            <form method="POST" action="setting-script.php">
                 <div class="form-group">
                        <input type="password" class="form-control" name="old-password" placeholder="old password">
                    </div>
                 <div class="form-group">
                        <input type="password" class="form-control" name="new-password" placeholder="new password">
                    </div>
                 <div class="form-group">
                        <input type="password" class="form-control" name="retype-password" placeholder="retype-Password">
                    </div>
                 
                     <div class="form-group">
                          <button type="submit" class="btn btn-primary" value=”submit”>Change</button>
                    </div>
            </form>
        </div>
      <?php include 'include\footer.php'; ?>
    </body>
</html>
<?php } else {
    header('location: index.php');
}
?>
