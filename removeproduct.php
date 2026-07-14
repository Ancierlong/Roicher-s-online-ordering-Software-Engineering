<?php
session_start();

require('database.php');
// When form submitted, insert values into the database.
if (isset($_REQUEST['prodid'])) {
    // removes backslashes
    $prodid = stripslashes($_REQUEST['prodid']);
    //escapes special characters in a string
    $prodid = mysqli_real_escape_string($con, $prodid);
    $query    = "DELETE from products where prodid = $prodid";
    $result   = mysqli_query($con, $query);
    if ($result) {  
        echo "<div class='form'>
              <h3>product removed successfully.</h3><br/>
              <p class='link'>Click here to <a href='adminpage.php'>reload page</a></p>
              </div>";

    } else {
        echo "<div class='form'>
              <h3>Required fields are missing.</h3><br/>
              <p class='link'>Click here to <a href='adminpage.php'>registration</a> again.</p>
              </div>";
    }
} else {
?>

<!DOCTYPE html>
<html lang="en" class="darkmode" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roicher Shop</title>
    <!--================= Bootstrap V5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--================= Font Awesome 5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!--================= RT Icons CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/rt-icons.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <!--================= Magnific popup Plugin =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!--================= Swiper Slider Plugin =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">
    <!--================= Main Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/rtsmenu.css">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/variables/variable6.css">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
   
  <!--================= Header Section Start Here =================-->
    <header id="rtsHeader">
        <div class="header-topbar header-topbar1">
            <div class="container">
                <div class="header-top-area">
                    
                </div>
            </div>
        </div>

        <div class="navbar-sticky">
            <div class="container">
                <div class="navbar-part navbar-part1">
                    <div class="navbar-inner">
                        <div class="left-side">
                            
                            <img src="assets/images/logoroichers.png" alt="umart-logo">
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        
       
    <!--================= Header Section End Here =================-->
    <br>
        <div class="page-path">
            <div class="container">
                <div class="breadcrumbs-inner">
                    <h1 class="path-title">Remove Product</h1>
                    <ul>
                        <li><a class="home-page-link" href="index.php">Home <i class="fal fa-angle-right"></i></a></li>
                        <li><a class="current-page" href="#">Remove</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
 
    <!--================= Header Section End Here =================-->
    <br>
 <div class="rts-product-details-section rts-product-details-section2 section-gap">
        <div class="container">
            <div class="row product-row">
                <div class="col-xl-12">
                    <div class="product-area details-product-area mb--70 justify-content-center">
                        <div class="product-thumb-area">


<form class="form" action="" method="post">
    <h1 class="login-title">Type Product ID</h1></br>
    <input type="text" class="product-input" name="prodid" placeholder="Product ID" required />
    <input type="submit" name="submit" value="Remove item" class="Remove-button">
    <?php
    }




?>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
</html>
