<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<center>
	<div>
		<h3><b>Update Sales Invoice</b></h3><br>
	    <form action="update_customerproduct.php" method="POST">

		<?php

		include "connect.php";

		$id = $_GET['id'];

		$sql = "SELECT * FROM sales invoice WHERE sales_number = $id " ;
		$res = mysqli_query($link, $sql);
		$row = mysqli_fetch_array($res);

		$sales_number = $row['sales_number'];
		$description = $row['description'];
		$price = $row['price'];
		$unit = $row['unit'];
		$date = $row['date'];
		$terms = $row['terms'];

		        echo '<div>';
		            echo '<h4>Sales Number: <input id="sales_number" type="text" name="sales_number" value="'. $sales_number .'" required></h4>';
		        echo '</div>';
		        echo '<br>';
		        echo '<div>';
		            echo '<h4>Description: <input id="description" type="text" name="description" value="'. $description .'" required></h4>';
		        echo '</div>';
		        echo '<br>';
				echo '<div>';
		            echo '<h4>Unit: <input id="unit" type="text" name="unit" value="'. $unit .'" required></h4>';
		        echo '</div>';
		        echo '<br>';
				echo '<div>';
		            echo '<h4>Date: <input id="date" type="text" name="date" value="'. $date .'" required></h4>';
		        echo '</div>';
		        echo '<br>';
				echo '<div>';
		            echo '<h4>terms: <input id="terms" type="text" name="terms" value="'. $terms .'" required></h4>';
		        echo '</div>';
		        echo '<br>';
				echo '<div>';
						echo '<input type="hidden" name="id" value="'. $id .'" >';
				echo '</div>';
		?>
	        <button type="submit"><b>Update</b></button>
	    </form>
	</div>
	</center>
</body>
</html>