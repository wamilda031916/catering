<?php
 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$sales_number =$_REQUEST['sales_number'];
$product_code =$_REQUEST['product_code'];
$quantity = $_REQUEST['quantity'];
$unit =$_REQUEST['unit'];
$unit_price =$_REQUEST['unit_price'];
$username = $_SESSION["username"];
$ins_query="insert into customer (`sales_number`,`product_code`,`quantity`,`unit`,`unit_price`,`username`) values ('$sales_number','$product_code','$quantity','$unit','$unit_price','$username')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "<h1>New Sales Item Inserted Successfully.</h1>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Sales Item</title>
<link href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/insert.css" />
<style>
	body{
	background-image: url(dashboard.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
</head>
<body>
<div class="form">
<p>|<a href="index.php">Back</a> || <a href="salesitem.php?username=<?php echo $_SESSION['username']; ?>"></a><a href="logout.php">Logout</a>|</p>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="customer_id" placeholder="Enter Customer id" required /></p>
<p><input type="text" name="firstname" placeholder="Enter Firstname" required /></p>
<p><input type="text" name="mi" placeholder="Enter mi" required /></p>
<p><input type="text" name="lastname" placeholder="Enter Lastname" required /></p>
<p><input type="text" name="customer_street" placeholder="Enter Customer Street" required /></p>
<p><input type="text" name="customer_barangay" placeholder="Enter Customer Barangay" required /></p>
<p><input type="text" name="city" placeholder="Enter City" required /></p>
<p><input type="text" name="contact_num" placeholder="Enter Contact Number" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#0ae4f1;"><?php echo $status; ?></p>
<h1 style="color:#0ae4f1;"/h1>

</div>
</div>
</body>
</html>
