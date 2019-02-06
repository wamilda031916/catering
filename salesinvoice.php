<?php
 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$sales_number =$_REQUEST['sales_number'];
$customer_id =$_REQUEST['customer_id'];
$date =$_REQUEST['date'];
$terms = $_REQUEST['terms'];
$customer_id = $_SESSION["customer_id"];
$ins_query="insert into customer (`sales_number`,`customer_id`,`date`,`terms`) values ('$sales_number','$customer_id','$date','$terms')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "<h1>Sales Invoice Record Inserted Successfully.</h1><h3><a href='view.php'>View Sales Invoice Record</a></h3>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add Sales nvoice Record</title>
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
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php?customer_id=<?php echo $_SESSION['customer_id']; ?>">View Records</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Customer Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="sales_number" placeholder="Enter Sales Number" required /></p>
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
