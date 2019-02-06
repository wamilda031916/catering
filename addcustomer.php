<?php
 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$customer_id =$_REQUEST['customer_id'];
$firstname =$_REQUEST['firstname'];
$mi =$_REQUEST['mi'];
$lastname = $_REQUEST['lastname'];
$customer_street =$_REQUEST['customer_street'];
$customer_barangay =$_REQUEST['customer_barangay'];
$city =$_REQUEST['city'];
$contact_num =$_REQUEST['contact_num'];
$customer_id = $_SESSION["customer_id"];
$ins_query="insert into customer (`customer_id`,`firstname`,`firstname`,`mi`,`lastname`,`customer_street`,`customer_barangay`,`city`,`contact_num`) values ('$customer_id','$firstname','$mi','$lastname','$customer_street','$customer_barangay','$city','$contact_num')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "<h1>Customer Record Successfully Inserted.</h1><h3><a href='view.php'>View Customer Record</a></h3>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
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
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php?username=<?php echo $_SESSION['customer_id']; ?>">View Records</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Customer Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="customer_id" placeholder="Enter Customer id" required /></p>
<p><input type="text" name="firstname" placeholder="Enter Firstname" required /></p>
<p><input type="text" name="mi" placeholder="Enter mi" required /></p>
<p><input type="text" name="lastname" placeholder="Enter Lastname" required /></p>
<p><input type="text" name="customer_street" placeholder="Enter Customer Street" required /></p>
<p><input type="text" name="customer_barangay" placeholder="Enter Customer Barangay" required /></p>
<p><input type="text" name="city" placeholder="Enter Customer City" required /></p>
<p><input type="text" name="contact_num" placeholder="Enter Number" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#0ae4f1;"><?php echo $status; ?></p>
<h1 style="color:#0ae4f1;"/h1>

</div>
</div>
</body>
</html>
