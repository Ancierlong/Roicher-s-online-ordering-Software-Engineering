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

$reqid = $_SESSION['reqid'];

$_SESSION['remove'] = $_POST['remove'];
$remove = $_SESSION['remove'];

$sql = "DELETE from requests where reqid = $reqid";
$result = $conn->query($sql);

echo '<script>alert("Request removed Removed")</script>';
header('Location: request.php');
?>