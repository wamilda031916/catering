<?php
 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$product_code =$_REQUEST['product_code'];
$description =$_REQUEST['description'];
$price = $_REQUEST['price'];
$unit =$_REQUEST['unit'];
$username = $_SESSION["username"];
$ins_query="insert into customer (`product_code`,`price`,`quantity`,`unit`,`username`) values ('$product_code','$price','$quantity','$unit','$username')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "<h1>New Product Inserted Successfully.</h1>";
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
<p>|<a href="index.php">Back</a> || <a href="product.php?username=<?php echo $_SESSION['username']; ?>"></a><a href="logout.php">Logout</a>|</p>

<div>
<h1>Insert New Product</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="product_code" placeholder="Enter Product Code" required /></p>
<p><input type="text" name="description" placeholder="Enter Description" required /></p>
<p><input type="text" name="price" placeholder="Enter Price" required /></p><p><input type="text" name="unit" placeholder="Enter Unit" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#0ae4f1;"><?php echo $status; ?></p>
<h1 style="color:#0ae4f1;"/h1>

</div>
</div>
</body>
</html>
