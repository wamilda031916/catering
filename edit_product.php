<?php
   include("connect.php");
   session_start();
   ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<center>
	<div>
		<h3><b>Update Customer</b></h3><br>
	    <form action="update_product.php" method="POST">

		<?php

		include "connect.php";

		$id = $_GET['product_code'];

		$sql = "SELECT * FROM product WHERE product_code = $id " ;
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($res);

		$description = $row['description'];
		$price = $row['price'];
		$unit = $row['unit'];

		        echo '<div>';
		            echo '<h4>Description: <input id="description" type="text" name="description" value="'. $description .'" required></h4>';
		        echo '</div>';
		        echo '</br>';
		        echo '<div>';
		            echo '<h4>Price: <input id="price" type="text" name="price" value="'. $price .'" required></h4>';
		        echo '</div>';
		        echo '<br>';
		        echo '<div>';
		            echo '<h4>Unit: <input id="unit" type="text" name="unit" value="'. $unit  .'" required></h4>';
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
