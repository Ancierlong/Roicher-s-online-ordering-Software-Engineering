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

session_regenerate_id();

$_SESSION['id'] = $_POST['prodid'];
$int = (int)$_SESSION['id'];

$sql = "SELECT prodid, prodname, prodprice, proddesc, filename FROM products where prodid = $int";
$result = $conn->query($sql);

$followingdata = $result->fetch_assoc();
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
                            <a href="index.php" class="logo"><img src="assets/images/logoroichers.png" alt="roicher5logo"></a>
                        </div>
                        <div class="rts-menu">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="has-dropdown"><a class="menu-item" href="#">Home <i
                                        class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link active" href="index.php">Main
                                                Home</a>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a class="menu-item active1" href="#">
                                            Shop <i class="rt-plus"></i>
                                        </a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li">
                                                <a class="dropdown-link" href="cart.html">Cart</a>
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

        </aside>
        <div class="page-path">
            <div class="container">
                <div class="breadcrumbs-inner">
                    <h1 class="path-title">Products</h1>
                    <ul>
                        <li><a class="home-page-link" href="index.php">Home <i class="fal fa-angle-right"></i></a></li>
                        <li><a class="current-page" href="#">Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--================= Header Section End Here =================-->

    <!--================= Product-details Section Start Here =================-->
    <div class="rts-product-details-section rts-product-details-section2 section-gap">
        <div class="container">
            <div class="row product-row">
                <div class="col-xl-12">
                    <div class="product-area details-product-area mb--70 justify-content-center">
                        <div class="product-thumb-area">
                            
                            <div class="thumb-wrapper one filterd-items figure">
                                
                                    <img src="./image/<?php echo $followingdata['filename']; ?>">
                                    <img src="<?php echo $imageURL; ?>" alt="" />
                                
                            </div>
                           
                                
        
                        </div>
                        <div class="contents">
                            <div class="product-status">                              
                            </div>
                            <br>
                            <br>
                            <br>
<!--ung echo didisplay ung data na nasa database-->
                            <form action="addingtocart.php" method="post">
                                
                            <input type="hidden" name="proid" value="<?php echo $followingdata['prodid']; ?>">
                            <input type="hidden" name="hidden_name" value="<?php echo $followingdata['prodname']; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $followingdata['prodprice']; ?>">
                            <h2 class="product-title"><?php echo $followingdata['prodname'];?><span class="stock">In Stock</span></h2>
                            <span class="product-price">₱<?php echo $followingdata['prodprice'];?></span>
                            
                            <div class="action-item3">
                                <div class="action-top">
                                    
                                </div>
                               
                            </div>
                            <!-- <div class="product-bottom-action">
                                <div class="cart-edit">
                                    <div class="quantity-edit action-item">
                                        <button class="button"><i class="fal fa-minus minus"></i></button>
                                        <input type="text" class="input" value="01" />
                                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                    </div>
                                </div> -->

                                <!-- ADD TO CART-->          
                            <div class="product-bottom-action">
                                <div class="quantity-edit action-item">
                                <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity">
                                </div>
                                </div> 
                              
                                <button type="submit" name="add_to_cart" value="add to cart" class="addto-cart-btn action-item"><iclass="rt-basket-shopping"></i> Add To
                                    Cart</a>
                                    </form>
                                
                            
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-full-details-area product-full-details-area2">
                <div class="details-filter-bar">
                    <button class="details-filter filter-btn active" data-show=".dls-one">Description</button>
                </div>

                
                <div class="full-details dls-one filterd-items">
                    <div class="full-details-inner">
<!--  ung echo didisplay ung data na nasa database               -->
                        <p class="mb--30"><?php echo $followingdata['proddesc']; ?></p>
                        
                    </div>
                </div>
<!--  sure na bang alisin toh?              
                <div class="full-details dls-two filterd-items hide">
                    <div class="full-details-inner">
                        <p class="mb--30">dITO NALANG SIGURO ILALAGAY KUNTING INFO LIKE PWEDE RN SIGURO UNG MGA POLICIES LIKE REMINDERS EME</p>
                        
                    </div>
                </div>      -->      
                
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
    </div>
    <!--================= Product-details Section End Here =================-->

   

    



    <!--================= Scroll to Top Start =================-->
    <div class="scroll-top-btn scroll-top-btn1"><i class="fas fa-angle-up arrow-up"></i><i
            class="fas fa-circle-notch"></i></div>
    <!--================= Scroll to Top End =================-->

    <!--================= Jquery latest version =================-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <!--================= Bootstrap latest version =================-->
    <script src="assets/js/vendors/popper.min.js"></script>
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