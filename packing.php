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

$_SESSION['packing'] = $_POST['packing'];
$packing = $_SESSION['packing'];

$sql = "UPDATE `orders` SET `status` = '$packing'  WHERE `OrderID` = '$orderid'";
$result = $conn->query($sql);


header('Location: adminorderspage.php');
?>