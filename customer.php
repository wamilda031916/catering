<!DOCTYPE html> 	
<html lang=''>
  <head>
    <meta charset="utf-8">
    <title>AJ's Catering</title>
    <link rel="stylesheet" href="bootstrap-4.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/view.css">
	
	<!-- Script -->
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <style>
  body{
	background-image: url(images/table2.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
	.table{
  background-color: green;
}
</style>
<body>
<div class="blueTable">
	<div class="col-md-1 col-sm-1"></div>
			
	<div class="well well-lg col-md-10 col-sm-10" id="box1">
		<div class="row">
			<div class="col-md-1 col-sm-1">
			  	<form action="create_product.html">
					<center><h1>View Customers</h1></center>
<table width="99%" border="5">
<thead>
<tr><th><strong>Customer Id</strong></th><th><strong>Firstname</strong></th><th><strong>Mi</strong></th><th><strong>Lastname</strong></th><th><strong>Customer Street</strong></th><th><strong>Customer Barangay</strong></th><th><strong>City</strong></th><th><strong>Contact Number</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<button class="block">Add Product</button>

	<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



<?php

include "connect.php";
$sql = "SELECT customer_id, firstname, mi, lastname, customer_street, customer_barangay, city, contact_num FROM customer";
$res = mysqli_query($link, $sql);
while($line = mysqli_fetch_array($res)) {
	$customer_id = $line['customer_id'];
	echo "<tr>";
	echo "<td><center>" .$customer_id ."</center></td>";
	echo "<td>" . $line['firstname'] . "</td>";
	echo "<td><center>" . $line['mi'] . "</center></td>";
	echo "<td>" . $line['lastname'] . "</td>";
	echo "<td><center>" . $line['customer_street'] . "</center></td>";
	echo "<td>" . $line['customer_barangay'] . "</td>";
	echo "<td>" . $line['city'] . "</td>";
	echo "<td><center>" . $line['contact_num'] . "</center></td>";
	echo '<td><a href="edit.php?customer_id='.$customer_id.'" title="Update Contact"><center>Edit</center></a></td>';
	echo '<td><a href="delete.php?customer_id='.$customer_id.'" title="Remove Contact"><center>Delete</center></a></td>';  
	echo "<tr>";
}
mysqli_close($link);
?>
			</tr>
		</table>
	</div>
</div>
</body>
</html>
