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
$Uname = $_SESSION['name'];

$_SESSION['fn']= $_POST['fn'];
$fn = $_SESSION['fn'];

$_SESSION['ln']= $_POST['ln'];
$ln = $_SESSION['ln'];
                                    
                                    $sql = "UPDATE `accounts` SET `fn`='$fn',`ln`='$ln' WHERE username = '$Uname' ";
                                    $result = $conn->query($sql); 
                                    header('Location: editaccount.php')
?>