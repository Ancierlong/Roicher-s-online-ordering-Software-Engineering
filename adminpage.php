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
                            
                            <img src="assets/images/logoroichers.png" alt="umart-logo">
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        
       
    <!--================= Header Section End Here =================-->

    <div class="rts-account-section section-gap">
        <div class="container">
            <div class="account-inner">
                <div class="account-side-navigation">

               
                 <!--================= Dito nakalagay ung pagadd at edit ng product =================-->   
                    <button class="filter-btn" data-show=".address"><i class="fal fa-map-marker-alt"></i>
                        Modify Products</button>

                  <!--================= Orders na button =================-->
                    <a href="adminorderspage.php"class="filter-btn" data-show=".accountdtls"><i class="fal fa-user"></i> Orders</a>
                    <!--================= Sales na button =================-->
                    <a href="salespage.php"class="filter-btn" data-show=".accountdtls"><i class="fal fa-user"></i> Sales</a>
                  <!--================= Request na button =================-->
                    <a href="request.php"class="filter-btn" data-show=".accountdtls"><i class="fal fa-user"></i> Requests</a>
                  <!--================= users na button =================-->
                    <a href="useraccounts.php"class="filter-btn" data-show=".accountdtls"><i class="fal fa-user"></i> User accounts</a>

                 <!--================= Logout na button =================-->
                    <a href="logout.php" class="filter-btn" data-show=".dashboard"><i
                            class="fal fa-long-arrow-left"></i>
                        Logout</a>
                </div>
                <div class="account-main-area">
                    <div class="account-main dashboard filterd-items">
                        <div class="account-profile-area">
                            <div class="d-block">
                                <span class="profile-name"><span>Hi,</span><?=$_SESSION['name']?></span>
                                <h1>Main</h1>
                            </div>
                        </div>
                        <p>From your account dashboard you can view your recent orders, manage your shipping and billing
                            addresses, and edit your password and account details.</p>

                            
                            
  
  <?php 
    $sql = "SELECT prodid, prodname, prodstocks , prodprice, proddesc, filename FROM products";
    $result = $conn->query($sql);?>
    <table class="table">
                            <thead>
                                <tr class="top-tr">
                                    <th>Item ID</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Stocks</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
    foreach($result as $value):?>
                                    <tr>
                                    <td><?php echo $value['prodid']?></td>
                                    <td><?php echo $value['prodname']?></td>
                                    <td><?php echo $value['prodprice']?></td>
                                    <td><?php echo $value['prodstocks']?></td>
                                    <td><?php echo $value['proddesc']?></td>
                                    <td><img src="./image/<?php echo $value['filename']; ?>" style="width: 100px; height= 100px;"></td>
                                    <?php endforeach;
?>
                                    </tr>
                            </tbody>
                        </table>
      
  </div>

                    </div>
                    
                    <div class="account-main address filterd-items hide">
                        <div class="row">
                       <!-- for edit-->
                       <a href="productregister.php">add product</a>
                       <p>-----</p>
                       <br>
                       <a href="removeproduct.php">remove product</a>
                       <p>-----</p>
                       <br>
                       <a href="editproduct.php">edit product</a>
                        </div>
                    </div>

                    
                    
                        </div>
                    </div>
                </div>
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