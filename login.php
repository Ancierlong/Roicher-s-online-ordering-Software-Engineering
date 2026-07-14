<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "roicher";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT prodid, prodname, prodprice, proddesc FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en" class="darkmode" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROICHER SHOP</title>
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



    <!-- UNG PRODUCT BOXES TO SA LOGIN,HOME-->
    <link rel="stylesheet" type="text/css" href="homeproductboxes.css">
</head>

<body>
    <!--================= Header Section Start Here =================-->
    <header id="rtsHeader">
        <div class="header-topbar header-topbar1">
        </div>
        <div class="navbar-sticky">
            <div class="container">
                <div class="navbar-part navbar-part1">
                    <div class="navbar-inner">
                        <div class="left-side">
                            <div class="hamburger-1">
                                <a href="#" class="nav-menu-link">
                                    <span class="dot1"></span>
                                    <span class="dot2"></span>
                                    <span class="dot3"></span>
                                    <span class="dot4"></span>
                                    <span class="dot5"></span>
                                    <span class="dot6"></span>
                                    <span class="dot7"></span>
                                    <span class="dot8"></span>
                                    <span class="dot9"></span>
                                </a>
                            </div>
                            <img src="assets/images/logoroichers.png" alt="roicher-logo">
                        </div>
                        <div class="rts-menu">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="has-dropdown">
                                        <a class="menu-item" href="#">
                                            Home <i class="rt-plus"></i>
                                        </a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li">
                                                <a class="dropdown-link active" href="index.php">
                                                    Main
                                                    Home
                                                </a>

                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a class="menu-item" href="#">
                                            Shop <i class="rt-plus"></i>
                                        </a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li">
                                                <a class="dropdown-link" href="addingtocart.php">Cart</a>
                                            </li>
                                            <li class="dropdown-li">
                                                <a class="dropdown-link" href="checkout.php">Checkout</a>
                                            </li>
                                            <li class="dropdown-li">
                                                <a class="dropdown-link" href="account.php">My Account</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a class="menu-item active1" href="#">
                                            Pages <i class="rt-plus"></i>
                                        </a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li">
                                                <a class="dropdown-link" href="about.html">About</a>
                                            </li>                                                                            
                                        </ul>
                                    </li>
                                    
                                    <li><a class="menu-item" href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="responsive-hamburger">
                            <div class="hamburger-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide-bar start -->
        <!--================= Header Section End Here =================-->

        <!--login-area start-->
        <div class="contact-area">
            <div class="container">
                
                    <h2 align="center">Login</h2>
                    
                    </br>
                        <div class="login-form">
                            <div class="section-title">  
                            
                        
                            
                        <div class="info-form">     
                            <div class="card">
                                <div class="card-body">
                                  
                                    <form action="loggingin.php" method="post">
                                        <label for="email">
                                            <i class="fas fa-user"></i>
                                        </label>
                                        <input type="text" name="username" placeholder="Username" id="username" required>
                                        <label for="password">
                                            <i class="fas fa-lock"></i>
                                        </label>
                                        <input type="password" name="password" placeholder="Password" id="password" required>
                                        <input type="submit" value="Login">
                                    </form>
                                    </br>
                                    Dont't have account?<a href="accregister.php" class="btn">Register</button> </a>
                                    
                                </div>
                            </div>
                        </div>
                            </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <!--login-area end-->
        <!--================= Scroll to Top Start =================-->
        <div class="scroll-top-btn scroll-top-btn1">
            <i class="fas fa-angle-up arrow-up"></i><i class="fas fa-circle-notch"></i>
        </div>
        <!--================= Scroll to Top End =================-->
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