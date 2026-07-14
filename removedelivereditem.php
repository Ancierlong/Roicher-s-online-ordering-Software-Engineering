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

$_SESSION['remove'] = $_POST['remove'];
$approve = $_SESSION['remove'];

$sql = "DELETE from orders where OrderID = $orderid";
$result = $conn->query($sql);

$sql = "DELETE from ordereditems where OrderID = $orderid";
$result = $conn->query($sql);

echo '<script>alert("Order Removed")</script>';
header('Location: ordersdelivered.php');
?>