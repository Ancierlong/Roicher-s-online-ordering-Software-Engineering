<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>

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
                            <a href="index.php" class="logo"><img src="assets/images/logoroichers.png" alt="roicher-logo"></a>
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
                                                <a class="dropdown-link" href="cart.php">Cart</a>
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

        <!--================= Header Section End Here =================-->
<?php
    require('database.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        $query    = "INSERT into `accounts` (`username`, `password`, `email`)
                    VALUES ('$username', '$password', '$email')";
        /*
        $query    = "INSERT into `cart` (`cartuser`)
                    VALUES ('$username')";

        $query    = "INSERT into `cartproducts` (`cartuser`)
                    VALUES ('$username')";
        */
        $result   = mysqli_query($con, $query);

        if ($result) {  
            /* $query    = "INSERT into `cartproducts` (`cartuser`)
                    VALUES ('$username')";
                    $result   = mysqli_query($con, $query);  */

            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";

        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='accregister.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
   <div class="contact-area">
        <div class="container">
            
                 <h1 align="center">Register Here</h1>
                    <form class="contact-form mb-10">
                        <div class="section-header">
                            <div class="wrapper">                               
                               
                            </div>
                        </div>
                        <div class="info-form">
                           
                                
                                <div class="card">
                                <div class="card-body">
                                <div class="input-box mb-20">
                                    <form class="form" action="" method="post">
                                        <label for="username">
                                        </label>
                                        <input type="text" class="login-input" name="username" placeholder="Username" required />
                                         
                                    
                                        <label for="email">
                                        </label>
                                        <input type="email" class="login-input" name="email" placeholder="Email Address">
                                    

                                        <label for="password">
                                        </label>
                                        <input type="password" class="login-input" name="password" placeholder="Password">
                                        </br>
                                        </br>
                                        </div>
                                </div>
                                        <input type="submit" name="submit" value="Register" class="login-button">
                                     <p class="link"><a href="index.php">Click to Login</a></p>
                                    </form>

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
</body>
</html>