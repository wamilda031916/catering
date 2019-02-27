 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<center>
	<div>
		<form action="create_customer.html">
			<button type="submit">Add New Customer</button>
		</form>
		<table>
			<tr>
				<th>Customer ID</th>
				<th>Firstname</th>
				<th>Mi</th>
				<th>Lastname</th>
				<th>Customer Street</th>
				<th>Customer Barangay</th>
				<th>City</th>
				<th>Contact Number</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<tr>
			<?php

			include "connect.php";
			$sql = "SELECT * FROM customer";
			$res = mysqli_query($link, $sql);
			while($line = mysqli_fetch_array($res)) {
				$customer_id = $line['customer_id'];
				echo "<tr>";
				echo "<td><center>" .$customer_id ."</center></td>";
				echo "<td><center>" . $line['firstname'] . "</center></td>";
				echo "<td><center>" .$line ['mi'] ."</center></td>";
				echo "<td><center>" . $line['lastname'] . "</center></td>";
				echo "<td><center>" .$line['customer_street'] ."</center></td>";
				echo "<td><center>" . $line['customer_barangay'] . "</center></td>";
				echo "<td><center>" .$line['city'] ."</center></td>";
				echo "<td><center>" . $line['contact_num'] . "</center></td>";
				echo '<td><a href="edit_customer.php?id='.$customer_id.'" title="Update Section">Edit</center></a></td>';
				echo '<td><a href="delete_customer.php?id='.$customer_id.'" title="Remove Section">Delete</center></a></td>';  
				echo "</tr>";
			}
			mysqli_close($link);
			?>	
			</tr>
		</table>
	</div>
	<br>
	<br>
	<div>
		<form action="create_product.php">
			<button type="submit">Add New Poduct</button>
		</form>
		<table>
			<tr>
				<th>Product Code</th>
				<th>Description</th>
				<th>Price</th>
				<th>Unit</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<tr>
			<?php

			include "connect.php";
			$sql = "SELECT * FROM product";
			$res = mysqli_query($link, $sql);
			while($line = mysqli_fetch_array($res)) {
				$product_code = $line['product_code'];
				echo "<tr>";
				echo "<td><center>" .$product_code ."</center></td>";
				echo "<td><center>" . $line['description'] . "</center></td>";
				echo "<td><center>" .$line['price'] ."</center></td>";
				echo "<td><center>" .$line['unit'] ."</center></td>";
				echo '<td><a href="edit_product.php?id='.$product_code.'" title="Update Student">Edit</center></a></td>';
				echo '<td><a href="delete_product.php?id='.$product_code.'" title="Remove Student">Delete</center></a></td>';  
				echo "</tr>";
			}
			mysqli_close($link);
			?>	
			</tr>
		</table>

	</div>
	</center>
</body>
</html>