<?php 
require('db.php');
include("auth.php");


?>
<!DOCTYPE html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/view.css">
   <link href="bootstrap/css/bootstrap.min.css">
   <title>View Sales Items</title>
</head>
<style>
	body{
	background-image: url(image4.jpeg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
<body>

<ul>
   <li class='active'><a href='index.php'>Back</a></li>
   <li><a href='logout.php'>Logout</a></li>
</ul>
</div>
<center><h1>View Sales Item</h1></center>

<table width="99%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>Product Number</strong></th><th><strong>Product Code</strong></th><th><strong>Quantity</strong></th><th><strong>Unit</strong></th><th><strong>Unit Price</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>



<?php
$count=1;
$username=$_SESSION['username'];
$sel_query="Select * from sales item where username='$username'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["product_number"]; ?></td><td align="center"><?php echo $row["product_code"]; ?></td><td align="center"><?php echo $row["quantity"]; ?></td><td align="center"><?php echo $row["unit"]; ?></td><td align="center"><?php echo $row["unit_price"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>

