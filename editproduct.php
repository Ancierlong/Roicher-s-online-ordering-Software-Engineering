<?php
session_start();

require('database.php');
// When form submitted, insert values into the database.
if (isset($_REQUEST['prodid'])) {
    // removes backslashes
    $prodid = stripslashes($_REQUEST['prodid']);
    //escapes special characters in a string
    $prodid = mysqli_real_escape_string($con, $prodid);
    $prodname = stripslashes($_REQUEST['prodname']);
    //escapes special characters in a string
    $prodname = mysqli_real_escape_string($con, $prodname);
    $prodprice    = stripslashes($_REQUEST['prodprice']);
    $prodprice    = mysqli_real_escape_string($con, $prodprice);
    $proddesc = stripslashes($_REQUEST['proddesc']);
    $proddesc = mysqli_real_escape_string($con, $proddesc);

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/".$filename;

    $query    = "UPDATE `products` SET `prodname` = '$prodname',  `prodprice` = '$prodprice', `proddesc` = '$proddesc' , `filename` = '$filename' WHERE `products`.`prodid` = $prodid";
    //$query    = "UPDATE `products` SET `prodprice` = '$prodprice' WHERE `products`.`prodid` = $prodid";
    //$query    = "UPDATE `products` SET `proddesc` = '$proddesc' WHERE `products`.`prodid` = $prodid";
    $result   = mysqli_query($con, $query);
    
    if (move_uploaded_file($tempname, $folder)) {
        echo "<div class='form'>
              <h3>product edited successfully.</h3><br/>
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
                    <h1 class="path-title">Edit Product</h1>
                    <ul>
                        <li><a class="home-page-link" href="index.php">Home <i class="fal fa-angle-right"></i></a></li>
                        <li><a class="current-page" href="#">Edit</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--================= Header Section End Here =================-->

 <div class="page-path">
                <div class="container">
                    <div class="breadcrumbs-inner">


<form class="form" action="" method="post" enctype="multipart/form-data">
    <h1 class="login-title">Product edit</h1></br>
    <input type="text" class="product-input" name="prodid" placeholder="Product ID" style="width: 100%;"required /></br></br>
    <input type="text" class="product-input" name="prodname" placeholder="Product Name" style="width: 100%;" required /></br></br>
    <input type="text" class="product-input" name="prodprice" placeholder="Product Price" style="width: 100%;" required></br></br>
    <input type="text" class="product-input" name="proddesc" placeholder="Product Description" style="width: 100%;" required></br></br>
    <input class="form-control" type="file" name="uploadfile" value="" required/>
    <input type="submit" name="submit" value="edit item" class="edit-button">
    <?php
    }
?>

</div>
</div>
</div>





</body>
</html>
