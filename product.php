<?php  include 'include\common.php';        ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Product</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >



        <!-- jQuery library -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
   <?php include 'include\header.php'; ?>
        <?php include 'include\check-if-add.php';?>
        <br><br><br>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our LifeStyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/5.jpg" alt="Responsive">
                    <h1>Canon Eos</h1>
                    <p>Price:Rs.36000.00</p>
                      <?php if (!isset($_SESSION['email'])) { ?>    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php                             } else {   
                        //We have created a function to check whether this particular product is added to cart or not.   
                                 if (check_if_add_to_cart(1))
                             { //This is same as if(check_if_added_to_cart != 0)        
                                 echo  '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>' ;                               } 
                                     else {                                     ?>         
                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                                 }                             }                  
                                   ?> 
 
                </div>
            </div>
                     <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/2.jpg" alt="Responsive">
                    <h1>Sony DSLR</h1>
                    <p>Price:Rs.40000.00</p>
                     <?php if (!isset($_SESSION['email'])) { ?>    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php                             } else {   
                        //We have created a function to check whether this particular product is added to cart or not.   
                                 if (check_if_add_to_cart(2))
                             { //This is same as if(check_if_added_to_cart != 0)        
                                   ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>   
                                <?php   } 
                                     else {                                     ?>         
                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                                 }                             }                  
                                   ?> 
                </div>
            </div>
                     <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/3.jpg" alt="Responsive">
                    <h1>Sony DSLR</h1>
                    <p>Price:Rs.45000.00</p>
                     <?php if (!isset($_SESSION['email'])) { ?>    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php                             } else {   
                        //We have created a function to check whether this particular product is added to cart or not.   
                                 if (check_if_add_to_cart(3))
                             { //This is same as if(check_if_added_to_cart != 0)        
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 } 
                                     else {                                     ?>         
                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                                 }                             }                  
                                   ?> 
                </div>
            </div>
                     <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/4.jpg" alt="Responsive">
                    <h1>Olampys DSLR</h1>
                    <p>Price:Rs.50000.00</p>
                     <?php if (!isset($_SESSION['email'])) { ?>    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php                             } else {   
                        //We have created a function to check whether this particular product is added to cart or not.   
                                 if (check_if_add_to_cart(4))
                             { //This is same as if(check_if_added_to_cart != 0)        
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 } 
                                     else {                                     ?>         
                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                                 }                             }                  
                                   ?> 
                </div>
            </div>
        </div>
             <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/9.jpg" alt="Responsive">
                    <h1>Titanmodel#301</h1>
                    <p>Price:Rs.13000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php                             } else {   
                        //We have created a function to check whether this particular product is added to cart or not.   
                                 if (check_if_add_to_cart(5))
                             { //This is same as if(check_if_added_to_cart != 0)        
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 } 
                                     else {                                     ?>         
                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                                 }                             }                  
                                   ?> 
                </div>
            </div>
                     <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/10.jpg" alt="Responsive">
                    <h1>Titanmodel#201</h1>
                    <p>Price:Rs.20000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php                             } else {   
                        //We have created a function to check whether this particular product is added to cart or not.   
                                 if (check_if_add_to_cart(6))
                             { //This is same as if(check_if_added_to_cart != 0)        
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 } 
                                     else {                                     ?>         
                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                                 }                             }                  
                                   ?> 
                </div>
            </div>
                     <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/11.jpg" alt="Responsive">
                    <h1>Hmt Milan</h1>
                    <p>Price:Rs.25000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php                             } else {   
                        //We have created a function to check whether this particular product is added to cart or not.   
                                 if (check_if_add_to_cart(7))
                             { //This is same as if(check_if_added_to_cart != 0)        
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 } 
                                     else {                                     ?>         
                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                                 }                             }                  
                                   ?> 
                </div>
            </div>
                     <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/12.jpg" alt="Responsive">
                    <h1>Faber Luba</h1>
                    <p>Price:Rs.30000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php                             } else {   
                        //We have created a function to check whether this particular product is added to cart or not.   
                                 if (check_if_add_to_cart(8))
                             { //This is same as if(check_if_added_to_cart != 0)        
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 } 
                                     else {                                     ?>         
                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                                 }                             }                  
                                   ?> 
                </div>
            </div>
        </div>
             <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/8.jpg" alt="Responsive">
                    <h1>H&W</h1>
                    <p>Price:Rs.800.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php                             } else {   
                        //We have created a function to check whether this particular product is added to cart or not.   
                                 if (check_if_add_to_cart(9))
                             { //This is same as if(check_if_added_to_cart != 0)        
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 } 
                                     else {                                     ?>         
                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                                 }                             }                  
                                   ?> 
                </div>
            </div>
                     <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/6.jpg" alt="Responsive">
                    <h1>Louis phil</h1>
                    <p>Price:Rs.40000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php                             } else {   
                        //We have created a function to check whether this particular product is added to cart or not.   
                                 if (check_if_add_to_cart(10))
                             { //This is same as if(check_if_added_to_cart != 0)        
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 } 
                                     else {                                     ?>         
                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                                 }                             }                  
                                   ?> 
                </div>
            </div>
                     <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/13.jpg" alt="Responsive">
                    <h1>jhon zok</h1>
                    <p>Price:Rs.1500.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php                             } else {   
                        //We have created a function to check whether this particular product is added to cart or not.   
                                 if (check_if_add_to_cart(11))
                             { //This is same as if(check_if_added_to_cart != 0)        
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 } 
                                     else {                                     ?>         
                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                                 }                             }                  
                                   ?> 
                </div>
            </div>
                     <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/14.jpg" alt="Responsive">
                    <h1>jalsani</h1>
                    <p>Price:Rs.1300.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php                             } else {   
                        //We have created a function to check whether this particular product is added to cart or not.   
                                 if (check_if_add_to_cart(12))
                             { //This is same as if(check_if_added_to_cart != 0)        
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 } 
                                     else {                                     ?>         
                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                                 }                             }                  
                                   ?> 
                </div>
            </div>
        </div>
        </div>
        <?php include 'include\footer.php'; ?>
    </body>
</html>
