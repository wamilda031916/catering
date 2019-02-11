<?php
 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$sales_number =$_REQUEST['sales_number'];
$customer_id =$_REQUEST['customer_id'];
$date =$_REQUEST['date'];
$terms =$_REQUEST['terms'];
$username = $_SESSION["username"];
$ins_query="insert into customer (`sales_number`,`customer_id`,`date`,`terms`,`username`) values ('$sales_number','$customer_id','$date','$terms','$username')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "<h1>New Sales Invooice Successfully Inserted.</h1>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Sales Invoice</title>
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
<p>|<a href="index.php">Back</a> || <a href="customer.php?username=<?php echo $_SESSION['username']; ?>"></a><a href="logout.php">Logout</a>|</p>

<div>
<h1>Insert New Sales Invoice</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="sales_product" placeholder="Enter Customer id" required /></p>
<p><input type="text" name="firstname" placeholder="Enter Sales Product" required /></p>
<p><input type="text" name="customer_id" placeholder="Enter Customer id" required /></p>
<p><input type="text" name="date" placeholder="Enter Date" required /></p>
<p><input type="text" name="terms" placeholder="Enter Terms" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#0ae4f1;"><?php echo $status; ?></p>
<h1 style="color:#0ae4f1;"/h1>

</div>
</div>
</body>
</html>
