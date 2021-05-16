<?php  include 'include\common.php';        ?>
<?php 
if (isset($_SESSION['email'])) {   header('location: product.php'); } else { ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle store</title>
        <!-- Latest compiled and minified CSS -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >



        <!-- jQuery library -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">

    </head>
    <body>
     <?php include 'include\header.php'; ?>
        <div class="banner-image">
            <div class="container">
                <div class="banner-content">
                    <h1> We sell LifeStyle</h1>
                        <p> Flat 40% OFF on premium brands</p>
                        <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </div>
       <?php include 'include\footer.php'; ?>
    </body>
</html>
<?php } ?>