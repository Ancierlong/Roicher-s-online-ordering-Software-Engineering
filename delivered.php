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

$_SESSION['delivered'] = $_POST['delivered'];
$delivered = $_SESSION['delivered'];

$sql = "UPDATE `orders` SET `status` = 'Delivered'  WHERE `OrderID` = '$orderid'";
$result = $conn->query($sql);

$sql = "SELECT sum(quantity) as total from ordereditems where OrderID = '$orderid' ";
$result = $conn->query($sql);

foreach($result as $value):
    $_SESSION['total'] = $value['total'];
    $currenttotal = $_SESSION['total'];
endforeach;

$sql = "SELECT Totalprice from orders where OrderID = '$orderid' ";
$result = $conn->query($sql);

foreach($result as $value):
    $_SESSION['Totalprice'] = $value['Totalprice'];
    $currentprice = $_SESSION['Totalprice'];
endforeach;

//date_default_timezone_set('Asia/Manila');
		$date = date('y/d/m', time());

$sql = "INSERT INTO `salesreport`(`date`, `itemssold`, `totalsales`) VALUES ('$date','$currenttotal','$currentprice')";
$result = $conn->query($sql);

header('Location: adminorderspage.php');

/*
$sql = "SELECT sum(quantity) as total from ordereditems where OrderID = '$orderid' ";
$result = $conn->query($sql);

?>

<?php foreach($result as $value):?>
    
<?php echo $value['total']?>

<?php endforeach;?>

*/
?>