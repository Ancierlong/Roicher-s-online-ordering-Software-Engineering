<?php
session_start();

require('database.php');
// When form submitted, insert values into the database.
if (isset($_REQUEST['prodname'])) {
    // removes backslashes
    $prodname = stripslashes($_REQUEST['prodname']);
    //escapes special characters in a string
    $prodname = mysqli_real_escape_string($con, $prodname);
    $prodprice    = stripslashes($_REQUEST['prodprice']);
    $prodprice    = mysqli_real_escape_string($con, $prodprice);
    $prodstocks    = stripslashes($_REQUEST['stocks']);
    $prodstocks    = mysqli_real_escape_string($con, $prodstocks);
    $proddesc = stripslashes($_REQUEST['proddesc']);
    $proddesc = mysqli_real_escape_string($con, $proddesc);
    
    //add image
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/".$filename;
    
    $query    = "INSERT into `products` (`prodname`, `prodprice`, `prodstocks` ,`proddesc`, `filename`)
                 VALUES ('$prodname', '$prodprice', '$prodstocks', '$proddesc', '$filename')";
    
    $result   = mysqli_query($con, $query);

    /*$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;
 
     $db = mysqli_connect("localhost", "root", "", "roicher");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO products (filename) VALUES ('$filename')";
 
    // Execute query
    mysqli_query($db, $sql);*/

    if (move_uploaded_file($tempname, $folder)) {
        echo "<div class='form'>
        <h3>product registered successfully.</h3><br/>
        <p class='link'>Click here to <a href='adminpage.php'>reload page</a></p>
        </div>";
    

    /* if ($result) {  
        echo "<div class='form'>
              <h3>product registered successfully.</h3><br/>
              <p class='link'>Click here to <a href='adminpage.php'>reload page</a></p>
              </div>";
        */
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
    <title>Roicher's Beauty Products </title>

    <!--================= DITO NAKAINPUT UNG MGA CSS FILES PARA MAGCONNECT =================-->
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
    <link rel="stylesheet" type="text/css" href="assets/css/variables/variable1.css">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">




    <!-- UNG PRODUCT BOXES TO SA LOGIN,HOME-->
    <link rel="stylesheet" type="text/css" href="homeproductboxes.css">
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
                            
                            <img src="assets/images/logoroichers.png" alt="roicher-logo"></a>
                        </div>                               
                </div>
            </div>
        </div>

        <!-- slide-bar start -->
       
    </header>
    <!--================= Header Section End Here =================-->
    <br>
    
     <div class="page-path">
                <div class="container">
                    <div class="breadcrumbs-inner">
    <form class="form" action="" method="post" enctype="multipart/form-data">
    <h1 class="login-title">Product Registration</h1></br>
    
    <input type="text" class="product-input" name="prodname" placeholder="Product Name"  style="width: 100%;" required /></br></br>
    <input type="number" class="product-input" name="prodprice" placeholder="Product Price"  style="width: 100%;" required></br></br>
    <input type="text" class="product-input" name="proddesc" placeholder="Product Description" style="width: 100%;" required></br></br>
    <input type="number" class="product-input" name="stocks" placeholder="Stocks" style="width: 100%;" required></br></br>

    Product image
    <input class="form-control" type="file" name="uploadfile" value="" required/>
    <br>
    <br>
    <input type="submit" name="submit" value="Register item" class="register-button">
    <br>
    <br>
    </div>
                </div>
            </div>
            
    <?php
    }
?>


    <!--================= Scroll to Top Start =================-->
    <div class="scroll-top-btn scroll-top-btn1"><i class="fas fa-angle-up arrow-up"></i><i
            class="fas fa-circle-notch"></i></div>
    <!--================= Jquery latest version =================-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <!--================= Bootstrap latest version =================-->
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <!--================= Wow.js =================-->
    <script src="assets/js/vendors/wow.min.js"></script>
    <!--================= Swiper Slider =================-->
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <!--================= Nice Select =================-->
    <script src="assets/js/vendors/jquery.nice-select.js"></script>
    <!--================= Zoom Plugin =================-->
    <script src="assets/js/vendors/zoom.js"></script>
    <!--================= metisMenu Plugin =================-->
    <script src="assets/js/vendors/metisMenu.min.js"></script>
    <!--================= Main Menu Plugin =================-->
    <script src="assets/js/vendors/rtsmenu.js"></script>
    <!--================= Magnefic Popup Plugin =================-->
    <script src="assets/js/vendors/isotope.pkgd.min.js"></script>
    <!--================= Magnefic Popup Plugin =================-->
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <!--================= Main Script =================-->
    <script src="assets/js/main.js"></script>
</body>

</html>