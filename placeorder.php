<?php

session_start();
// If the user is not logged in redirect to the login page...
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



				$_SESSION['inputFN'] = $_POST['FN'];
				$FN	= $_SESSION['inputFN'];

				$_SESSION['inputLN'] = $_POST['LN'];
				$LN	= $_SESSION['inputLN'];

				$_SESSION['inputStreet'] = $_POST['Street'];
				$Street = $_SESSION['inputStreet'];

				$_SESSION['inputCity'] = $_POST['City'];
				$City	= $_SESSION['inputCity'];

				$_SESSION['inputProvince'] = $_POST['Province'];
				$Province	= $_SESSION['inputProvince'];

				$_SESSION['inputNumber'] = $_POST['Number'];	
				$Number	= $_SESSION['inputNumber'];
				
				$_SESSION['inputEmail'] = $_POST['Email'];
				$Email	= $_SESSION['inputEmail'];

				$_SESSION['reference'] = $_POST['reference'];
				$ref	= $_SESSION['reference'];
/*

				$sql = "INSERT INTO `orders`(`OrderID`, `orderdate`)
				VALUES ('', NOW())";
				$result = $conn->query($sql);

				$sql = "SELECT OrderID from orders where orderdate = Now()";
				$result = $conn->query($sql);
				
				foreach($result as $value):
				$_SESSION['orderid'] = $value['OrderID'];
				$orderid = $_SESSION['orderid'];	
				endforeach;

				$sql = "UPDATE `orders` SET `reference`='$ref',`Firstname`='$FN',
				`Lastname`='$LN',`Street`='$Street',`City`='$City',`Province`='$Province',`MobileNo`='$Number',`email`='$Email' 
				WHERE $orderid";
				$result = $conn->query($sql);
*/

		date_default_timezone_set('Asia/Manila');
		$date = date('y/d/m h:i:s a', time());
		$salesbasedate = date('y/d/m', time());
	
		$sql = "INSERT INTO `orders`(`OrderID`, `orderdate`, `reference` , `Firstname`, `Lastname`, `Street`, `City`, `Province`, `MobileNo`, `email`, `basesalesdate`) 
				VALUES ('', '$date','$ref','$FN','$LN','$Street','$City','$Province','$Number','$Email' , '$salesbasedate')";
				$result = $conn->query($sql);

				$sql = " SELECT OrderID from orders where orderdate = '$date'";
				$result = $conn->query($sql);
				
			foreach($result as $value):
			$_SESSION['orderid'] = $value['OrderID'];
			$orderid = $_SESSION['orderid'];	
			endforeach;

if(!empty($_SESSION["shopping_cart"]))
{
    $total = 0;
                    foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
								$proname = $values["item_name"];
								$quanti = (int)$values["item_quantity"];
								$price = (int)$values["item_price"];
								$multivalue = (int)$values["item_quantity"] * $values["item_price"];
								$user	= $_SESSION['name'];
										$values["item_price"];             
								$sql = "INSERT INTO `ordereditems`(`OrderID`, `username`, `prod`, `quantity`, `price`, `combinedprice`, `orderdate`) 
                                VALUES ('$orderid', '$user', '$proname', '$quanti', '$price','$multivalue', '$date')";
								$result = $conn->query($sql);
								$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
				$sql    = "UPDATE `orders` SET `Username` = '$user', `Totalprice` = '$total' WHERE `OrderID` = $orderid";
				$result = $conn->query($sql);
				}

//ppunta na sa index
echo '<script>alert("Order placed")</script>';
				header('Location: index.php');
				
							?>
				
			<?php


/* $to = 'gelocalong@email.com';

$subject = 'Orders';

$message = 'List';

mail($to, $subject, $message, [$headers], [$parameters]);
*/

/*
					$proname = $_SESSION['proname'];
					$quanti = (int)$_SESSION['quantity'];
					$user	= $_SESSION['name'];
					
					$sql = "INSERT INTO `orders`(`username`, `prod`, `quantity`, `date`) VALUES ('$user','$proname','$quanti ','')";
					$result = $conn->query($sql); */
?>