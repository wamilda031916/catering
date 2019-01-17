<?php
 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$product_code =$_REQUEST['product_code'];
$description =$_REQUEST['description'];
$price =$_REQUEST['price'];
$unit =$_REQUEST['unit'];
$product_code = $_SESSION["product_code"];
$ins_query="insert into sales invoice (`product_code`,`description`,`price`,`unit`) values ('$product_code','$description','$price','$unit')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "<h1>New Record Inserted Successfully.</h1><h3><a href='view.php'>View Inserted Record</a></h3>";
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
	background-image: url(.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php?username=<?php echo $_SESSION['sales_number']; ?>">View Records</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="product_code" placeholder="Enter Product Code" required /></p>
<p><input type="text" name="description" placeholder="Enter description" required /></p>
<p><input type="text" name="price" placeholder="Enter Price" required /></p>
<p><input type="text" name="unit" placeholder="Enter Unit" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#0ae4f1;"><?php echo $status; ?></p>
<h1 style="color:#0ae4f1;"/h1>

</div>
</div>
<marquee behavior=alternate><b><i>Powered By: Kunal Vaidyaâ„¢</i></b></marquee>
</body>
</html>
