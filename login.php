<?php  include 'include\common.php';        ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
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
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Login</h4></div>
            <div class="panel-body">
                <p>Login to make a purchase</p>
                <form method='POST' action='login_submit.php'>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                     <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                   <button type="submit" class="btn btn-primary" value=”login_submit”>Login</button>
                </form>
            </div>
            <div class="panel-footer">
                <p>Don't have an account?<a href="signup.php">Register</a></p>
            </div>
        </div>
      <?php include 'include\footer.php'; ?>
    </body>
</html>
