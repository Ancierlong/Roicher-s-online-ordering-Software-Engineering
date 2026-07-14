<?php
    // Update the details below with your MySQL details
    session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
session_regenerate_id();



    if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		//convert into session for keeping it place
		$_GET['proid'] = $_POST['proid'];

		$_SESSION['proname'] = $_POST['hidden_name'];

		$_SESSION['price'] = $_POST['hidden_price'];

		$_SESSION['item_quantity'] = $_POST['quantity'];

		
		$_SESSION['quantity'] = $_POST['quantity'];
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["proid"], $item_array_id))
		{
				
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["proid"],
				'item_name'			=>	$_SESSION['proname'],
				'item_price'		=>	$_SESSION['price'],
				'item_quantity'		=>	$_SESSION['quantity']
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
				'item_id'			=>	$_POST["proid"],
				'item_name'			=>	$_POST['hidden_name'],
				'item_price'		=>	$_POST['hidden_price'],
				'item_quantity'		=>	$_POST['quantity']
		);
		$_SESSION["shopping_cart"][0] = $item_array;
		
	}


}
?>

<!DOCTYPE html>
<html lang="en" class="darkmode" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roicher's Beauty Products</title>

    <!--================= DITO NAKAINPUT UNG MGA CSS FILES PARA MAGCONNECT =================-->
    <!--================= Bootstrap V5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--================= Font Awesome 5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!--================= RT Icons CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/rt-icons.css">          
    <!--================= Main Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/rtsmenu.css">
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
                            <img src="assets/images/logoroichers.png" alt="roicher-logo"></a>
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

     
                                    <li><a class="menu-item" href="contact.html">Contact</a></li>
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
                            <li class="info phone"><a href="tel:78090790890208806803">09173233486</a></li>
                            <li class="info email"><a href="email:info@webmail.com">roichershoppe15@gmail.com</a></li>
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
                        <h1 class="path-title">Cart</h1>
                        <ul>
                            <li><a class="home-page-link" href="index.php">Home <i class="fal fa-angle-right"></i></a></li>
                            <li><a class="current-page" href="#">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
    </header>
    <!--================= Header Section End Here =================-->

    <!--================= Cart Section Start Here =================-->
     <div class="rts-cart-section">
        <div class="container">  
       
           <h3 class="section-title">Order Details</h3>
           
            <div class="row justify-content-between">
             <div class="col-xl-7">
               <div class="cart-table-area">
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="20%">Quantity</th>
						<th width="20%">Price</th>
						<th width="40%">Total</th>
						<th width="20%">Action</th>
					</tr>
					
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						
						{
					?>
					<tr>
                    <!--==========PRODUCT NAME============-->
						<td>
                        <form action="checkout.php" method="Post">
                        <?php echo $values["item_name"]; ?> 
                        
                        </td>
                    <!--==========PRODUCT QUANTITY============-->
						<td>
                        <?php echo $values["item_quantity"];?>
                        
                        </td>
                    <!--==========PRODUCT PRICE============-->
						<td> 
                        ₱<?php echo $values["item_price"]; ?>
                        </td>
                        <td>₱ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="addingtocart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
                         
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
<!-- Current!!!!! 
    lalabas lang pag may laman cart,
    pag wala naka hide
-->
                    
						
				</table>
			</div>
			
              </div>
             </div>

             <div class="col-xl-4">
                    <div class="checkout-box">
                        <div class="checkout-box-inner">
                            <div class="subtotal-area">                               
                            </div>
                            <div class="shipping-check">
                                <span class="title">Over All Total</span>
                                <div class="check-options">
                                    
                                       <tr>			
<!-- Sira pa, wag muna galawin to 
nag eerror pag walang laman cart 
goods naman pag may laman cart
sira ung checkout button-->
						                 <td align="right">₱ <?php echo number_format($total, 2); ?></td>
						                  <td></td>
                                          <input type="submit" value="Procced To Checkout"class="procced-btn"></a>
                        <a href="index.php" class="continue-shopping"><i class="fal fa-long-arrow-left"></i> Continue Shopping</a>
					                   </tr>									                        
                                    </form>
                                </div>
                            </div>                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
 
            </div>
            <?php
					}
					?>          
            <?php
				//remove product
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="addingtocart.php"</script>';
			}
		}
	}
}
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/


?>

                    
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