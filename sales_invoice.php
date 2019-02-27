<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<h4>customer:
		            <?php 
		            	include "connect.php";
		            	$sql = "SELECT * FROM customer";
		            	$res = mysqli_query($link, $sql);
		            ?>
		            <select name= "customer" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['customer_id']; ?>"><?php echo $line[1] ?></option>
		            <?php } ?>
		            </select>
	    </h4>
	</center>
<center>
	<div>
	        <div>
	            <h4>Product:
		            <?php 
		            	include "connect.php";
		            	$sql = "SELECT * FROM product";
		            	$res = mysqli_query($link, $sql);
		            ?>
		            <select name= "product" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['product_ode']; ?>"><?php echo $line[1] ?></option>
		            <?php }?>
		            <?php 

include "connect.php";

$product_code = $_GET['product_code'];

$sql = "SELECT * FROM product WHERE product_code = '$product_code'";

$res = mysqli_query($link, $sql);

mysqli_close($link);
?>
		            </select>
	            </h4>
	        </div>
	        <button type="submit"><b>Add Product</b></button>
	    </form>
	</div>
	</center>
	<div class="container">
	<div class="col-md-1 col-sm-1"></div>
		<div class="well well-lg col-md-10 col-sm-10" id="box1">
			<div class="row">
				<div class="col-md-1 col-sm-1" action="create_customer.html">
					<form action="create_product.html">
					<center><h1>View Products</h1></center>
					<table width="99%" border="5" style="border-collapse;">
						<thead>
							<tr><th><strong>Description</strong></th><th><strong>Customer Id </strong></th><th><strong>Price</strong></th><th><strong>Unit</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
						</thead>
</body>
</html>