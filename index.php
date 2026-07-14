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

$sql = "SELECT prodid, prodname, prodprice, proddesc, filename FROM products";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en" class="darkmode" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roicher's Beauty Products - E-commerce HTML Template</title>

    <!--================= DITO NAKAINPUT UNG MGA CSS FILES PARA MAGCONNECT =================-->
    <!--================= Bootstrap V5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--================= Font Awesome 5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!--================= RT Icons CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/rt-icons.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
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
                            <a href="index.php"><img src="assets/images/logoroichers.png" alt="logo"></a>
                        </div>
                        <div class="rts-menu">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="has-dropdown"><a class="menu-item active1" href="#">Home <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link active" href="index.php">Main
                                                    Home</a>
                                            </li>
                                           

                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a class="menu-item" href="#"> Shop <i class="rt-plus"></i>
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
                                            <li class="dropdown-li"><a class="dropdown-link" href="about.html">About Us</a>
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
                            <a href="account.php" method="post" class="account"><i class="rt-user-2"></i></a>                         
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
                        <img src="assets/images/logoroichers.png" alt="roicher">
                        <p class="mb-30">
                            To further assist your needs, please contact on the following number and Email stated below.
                        </p>
                    </div>
                    <div class="info-widget info-widget2">
                        <h4 class="offset-title mb-20">Get In Touch </h4>
                        <ul>
                            <li class="info phone">09173233486</li>
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
           
        </aside>
    </header>
    <!--================= Header Section End Here =================-->

    <!--================= DITO UNG MGA PRODUCT WITH PHP KINEME =================-->
  
    <div class="rts-featured-product-section1">
        <div class="container">
            <div class="rts-featured-product-section-inner">
                <div class="section-header section-header3 text-center">
                    <div class="wrapper">
                        <div class="sub-content">
                            <img class="line-1" src="assets/images/banner/wvbo-icon.png" alt="">
                            <span class="sub-text">Featured</span>
                            <img class="line-2" src="assets/images/banner/wvbo-icon.png" alt="">
                        </div>
                        <h2 class="title">FEATURED PRODUCT</h2>
                    </div>
                </div>
    

    <div class="row">
    <?php
    foreach($result as $value):?>

                
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    
                        <!-- wag ttanggalin etong form action kelangan to apra sa product page-->
                    <form action="productpage.php" method="post">
                    <div class="row">
                        <div class="product-item element-item1">

                            <!--   papakita ung image..   comment ko muna nagbbugged -->
                            <!-- 
                                <a href="productpage.php" class="product-image image-hover-variations">
                                <button type="submit" value="view">View product</a>
                            -->
                            <img src="./image/<?php echo $value['filename']; ?> "style="width: 300px; height= 300px;">
                            <img src="<?php echo $imageURL; ?>" alt="" />
                            
         
                                </div>
                            </a>
                            
                            
                           <!-- <div class="bottom-content">
                                <div class="star-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>  -->

                                
                      <!--wag tatanggalin tong prodid kasi dyan kkuha ung product page galing database-->     
                                <input type="hidden" name="prodid" value="<?php echo $value['prodid']; ?>">
                                <h4><?php echo $value['prodname']?><h4>
                                <div class="action-wrap">
                                <h5>₱<?php echo $value['prodprice']?></h5>
                                <!-- <p ><?php echo $value['proddesc']?></p> -->
                                <button type="submit" value="view">View product</a>
    </form>            
                             </div>
                            </div>
                            </div>
                                                     
                           
                        



                
<?php endforeach;
?>
    <!--================= END NG PRODUCT PHP KINEME =================-->
    
   




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