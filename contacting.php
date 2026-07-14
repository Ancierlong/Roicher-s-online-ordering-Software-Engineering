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


$_SESSION['reqtype'] = $_POST['reqtype'];
$reqtype = $_SESSION['reqtype'];

$_SESSION['reqfullname'] = $_POST['reqfullname'];
$reqfullname = $_SESSION['reqfullname'];

$_SESSION['reqemail'] = $_POST['reqemail'];
$reqemail = $_SESSION['reqemail'];

$_SESSION['reqno'] = $_POST['reqno'];
$reqno = $_SESSION['reqno'];

$_SESSION['reqmess'] = $_POST['reqmess'];
$reqmess = $_SESSION['reqmess'];


$sql = "INSERT INTO `requests`(`reqid`, `reqtype`, `reqfullname`, `reqemail`, `reqno`, `reqmess`, `reqdate`) 
                    VALUES ('','$reqtype','$reqfullname','$reqemail','$reqno','$reqmess', now())";
$result = $conn->query($sql);

header('Location: index.php');
?>