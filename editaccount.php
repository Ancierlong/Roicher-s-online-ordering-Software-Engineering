<?php

session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}

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

?>

<!DOCTYPE html>
<html lang="en" class="darkmode" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoicherShop</title>
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
    <!--================= Mobile Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/metisMenu.css">
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
                            <img src="assets/images/logoroichers.png" alt="umart-logo"></a>
                        </div>
                        <div class="rts-menu">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="has-dropdown">
                                        <a class="menu-item" href="#">Home <i class="rt-plus"></i>
                                        </a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li">
                                                <a class="dropdown-link active" href="index.php">
                                                    Main Home
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a class="menu-item active1" href="#">
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

                               
                                    <li class="has-dropdown"><a class="menu-item" href="#">Pages <i
                                        class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="about.html">About</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="responsive-hamburger">
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
                        </div>
                        <div class="header-action-items header-action-items1">                          
                            <a href="account.php" class="account"><i class="rt-user-2"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="offset-sidebar">
                <a class="hamburger-1 mobile-hamburger-1 ml--30" href="#"><span><i class="rt-xmark"></i></span></a>
            </div>
            <!-- offset-sidebar start -->
            <div class="offset-sidebar-main">
                <div class="offset-widget mb-40">
                    <div class="info-widget">
                        <img src="assets/images/logoroichers.png" alt="">
                        <p class="mb-30">
                            To further assist your needs, please contact on the following number and Email stated below.
                        </p>
                    </div>
                    <div class="info-widget info-widget2">
                        <h4 class="offset-title mb-20">Get In Touch </h4>
                        <ul>
                           <li class="info phone">09173233486</a></li>
                            <li class="info email">roichershoppe15@gmail.com</a></li>
                            <li class="info location">Golden City Anbu 2-F Imus</li>
                        </ul>
                        <div class="offset-social-link">
                            <h4 class="offset-title mb-20">Follow Us </h4>
                            <ul class="social-icon">
                                <li><a href="https://www.facebook.com/roichershoppe15"><i class="fab fa-facebook-f"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
		    <!-- offset-sidebar end -->

         <!-- exit button sa side bar -->
        
         <!-- end ng exit button sa side bar -->
        </aside>
    </header>
    <!--================= Header Section End Here =================-->

    <div class="rts-account-section section-gap">
        <div class="container">
            <div class="account-inner">
                <div class="account-side-navigation">
                    <a href="account.php" class="filter-btn" data-show=".dashboard"><i class="fal fa-chart-bar"></i>
                        Dashboard</a>

                        <button class="filter-btn active" data-show=".dashboard"><i class="fal fa-chart-bar"></i>
                        Edit account</button>
                    
                    <a href="logout.php" class="filter-btn" data-show=".dashboard"><i
                            class="fal fa-long-arrow-left"></i>
                        Logout</a>
                </div>
                <div class="account-main-area">
                    <div class="account-main dashboard filterd-items">
                        <div class="account-profile-area">

                            <div class="d-block">
                                <span class="profile-name"><span>Hi,</span><?=$_SESSION['name']?></span>
                            </div>
                        </div>
                        <p>From your account dashboard you can view your recent orders, check your shipping and billing
                            addresses.</p>
                            <p>_________________________________________________________________________________________________________________________   
<!--FUNCTIONING MY ORDERS -->      
                            <?php 
                                $Uname = $_SESSION['name'];
                                $sql = "SELECT username, email, fn, ln, address
                                FROM accounts where username = '$Uname' ";
$result = $conn->query($sql); ?>
 <table class="table">
                            <thead>
                                <tr class="top-tr">
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Full address</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
    foreach($result as $value):?>
                                    <tr>
    <form action="userorderinfo.php" method="POST">
                                    <td><?php echo $value['username']?></td>
                                    <td><?php echo $value['email']?></td>
                                    <input type="hidden" name="orderid" value="<?php echo $value['email']?>">
                                    <td><?php echo $value['fn']?></td>
                                    <td><?php echo $value['ln']?></td>
                                    <td><?php echo $value['address']?></td>
    </form>
                                    <?php endforeach;
?>
                                    </tr>
                            </tbody>
                        </table>
                                    
<!--end display my orders -->



<div class="info-form">     
                            <div class="card">
                                <div class="card-body">
                                  
                                    <form action="updatenames.php" method="post">
                                    
                                        <label>
                                            Firstname: 
                                        </label>
                                        <input type="text" name="fn" placeholder="Here!" id="username" required>
                                        
                                        <label>
                                            Lastname: 
                                        </label>
                                        <input type="text" name="ln" placeholder="Here!" id="password" required>
                                        <input type="submit" value="update">
                                    </form>
                                    <br>
                                    
                                    <form action="updateaddress.php" method="post">    
                                        <label>
                                            <p>Full address  </p>
                                        </label>
                                        <textarea name="inputaddress" id="address" cols="80" rows="4"></textarea>
                                        <input type="submit" value="update">
                                    </form>
                                    <br>

                                    <form action="updatepass.php" method="post"> 
                                    <label>
                                            New Passsword:  
                                        </label>
                                        <input type="text" name="pass" placeholder="Here!" id="password" required>
                                        <input type="submit" value="update">
                                    </form>
                                    <br>
                                    
<?php 
/*
$_SESSION['fn']= $_POST['fn'];
$fn = $_SESSION['fn'];

$_SESSION['ln']= $_POST['ln'];
$ln = $_SESSION['ln'];

$sql = "UPDATE `accounts` SET `fn`='$fn',`ln`='$ln' WHERE '$Uname'";
$result = $conn->query($sql); 
*/

?>

                                    </br>
                                    
                                </div>
                            </div>
                        </div>
                                                                    
                    
    



    <!--================= Scroll to Top Start =================-->
    <div class="scroll-top-btn scroll-top-btn1"><i class="fas fa-angle-up arrow-up"></i><i
            class="fas fa-circle-notch"></i></div>
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
    <!--================= Swiper Slider =================-->
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