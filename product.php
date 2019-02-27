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
	 .block {
  display: block;
  width: 0%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}
</style>
  <body>
<div class="container">
	<div class="col-md-1 col-sm-1"></div>
		<div class="well well-lg col-md-10 col-sm-10" id="box1">
			<div class="row">
				<div class="col-md-1 col-sm-1" action="create_customer.html">
					<form action="create_product.html">
					<center><h1>View Products</h1></center>
					<table width="99%" border="5" style="border-collapse;">
						<thead>
							<tr><th><strong>Product Code</strong></th><th><strong>Description</strong></th><th><strong>Price</strong></th><th><strong>Unit</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
						</thead>
					<button class="block">Add Product</button>
					<?php include "connect.php";
						$sql = "SELECT product_code, description,  price, unit FROM product";
						$res = mysqli_query($link, $sql);
							while($line = mysqli_fetch_array($res)){
							$product_code = $line['product_code'];
							echo"<tr>";
							echo"<td><center>" .$product_code ."</center></td>";
							echo "<td>" . $line['description'] . "</td>";
							echo"<td><center>" . $line['price'] . "</center></td>";
							echo "<td>" . $line['unit'] . "</td>";
							echo '<td><a href="edit_product.php?product_code='.$product_code.'" title="Update Contact"><center>Edit</center></a></td>';
							echo '<td><a href="delete_product.php?product_code='.$product_code.'" title="Remove Contact"><center>Delete</center></a></td>';  
							echo "<tr>";
							}
							mysqli_close($link);
					?>
							</tr>
				</table>
				</div>
			</div>
		</div>
</div>
</body>
</html>