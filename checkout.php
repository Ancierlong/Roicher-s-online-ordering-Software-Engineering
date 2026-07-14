<?php
    // Update the details below with your MySQL details
    session_start();
    if(empty($_SESSION["shopping_cart"]))
      {

        header('Location: addingtocart.php');
        echo'<script>alert("Cart is Empty!!!")</script>';
      }
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}

?>

<!DOCTYPE html>
<html lang="en" class="darkmode" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROICHER SHOP</title>

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
                            <img src="assets/images/logoroichers.png" alt="roicher-logo">
                        </div>
                        <div class="rts-menu">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="has-dropdown">
                                        <a class="menu-item active1" href="#">
                                            Home <i class="rt-plus"></i>
                                        </a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li">
                                                <a class="dropdown-link active" href="index.php">
                                                    Main
                                                    Home
                                                </a>
                                            </li>


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
                                        <a class="menu-item" href="#">
                                            Pages <i class="rt-plus"></i>
                                        </a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li">
                                                <a class="dropdown-link" href="about.html">About Us</a>
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
                                <li class="info phone">09173233486</li>
                                <li class="info email">roichershoppe15@gmail.com</li>
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
                        <h1 class="path-title">Checkout</h1>
                        <ul>
                            <li><a class="home-page-link" href="index.php">Home <i class="fal fa-angle-right"></i></a></li>
                            <li><a class="current-page" href="#">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </header>
    <!--================= Header Section End Here =================-->


    <div class="rts-checkout-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-8">
<!-- please wag ttanggalin tong form -->                    
<form action="placeorder.php" method="Post">    
                                <div class="input-div"><input type="text" name="FN" placeholder="First name**"></div><br>

                                <div class="input-div"><input type="text" name="LN" placeholder="Last name**"></div><br>

                                <div class="input-div"><input type="text" name="Street" placeholder="Street Address**" style="width: 65%;"></div><br>

                                <div class="input-div"><input type="text" name="City" placeholder="City*"></div><br>
                                
                                <div class="input-div"><input type="text" name="Province" placeholder="Province**"></div><br>

                                <div class="input-div"><input type="number" name="Number" placeholder="Phone Number**"></div><br>

                                <div class="input-div"><input type="email" name="Email" placeholder="Email Address**"></div><br>
                                
                                <div class="input-div"><input type="number" name="reference" placeholder="GCASH PAYMENT REFERENCE NO.**" style="width: 65%;"></div><br>

                </div>
                <div class="col-xl-4">
                    <div class="action-item">
                        <div class="action-top">
                            <span class="action-title">Payment Option</span>
                            
                        </div>
<!-- -->     
                    
              
<?php

if(!empty($_SESSION["shopping_cart"]))
{
    $total = 0;

                    foreach($_SESSION["shopping_cart"] as $keys => $values)
						
						{
					?>
					<tr>
						<td>Item Name: <?php echo $values["item_name"]; ?></td><br>
						<td>Quantity: <?php echo $values["item_quantity"]; ?></td><br>
                        <td>₱<?php echo $values["item_price"]; ?></td><br>                    
                        <br>
						
					</tr>
					
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">₱<?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
                    <br>
                    <?php
					}
					?>
                    <br>
                    <h2><input type="submit" value="Place Order"></h2>
                    
</form>
                    <div class="action-item m-0">
                        <div class="payment-options checkout-options">
                            <form>
                                <div class="form-group">
<!-- GCASH IMAGE MAY FOLDER YAN *gcash* then filename folder-->
                                <img src="GCash-MyQR-06122022105925.jpg"style="width: 500px; height= 500px;">
                                    Gcash Payment
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
        </div>
    

  
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