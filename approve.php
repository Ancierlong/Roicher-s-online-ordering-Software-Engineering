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

$orderid = $_SESSION['orderid'];

$_SESSION['approve'] = $_POST['approve'];
$approve = $_SESSION['approve'];

$sql = "UPDATE `orders` SET `status` = '$approve'  WHERE `OrderID` = '$orderid'";
$result = $conn->query($sql);


header('Location: adminorderspage.php');
?>