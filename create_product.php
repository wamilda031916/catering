<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<center>
	<div>
		<h3>Create New Product</h3>
		<form action="insert_product.php" method="POST">
	        <div>
	            <h4>Description:
		            <input id="description" type="text" name="description" placeholder="Input Description" required>
	            </h4>
	        </div>
	        <div>
	            <h4>Price:
		            <input id="price" type="text" name="price" placeholder="Input Price" required>
	            </h4>
	        </div>
	        <div>
	            <h4>Unit:
		            <input id="unit" type="text" name="unit" placeholder="InputUnit" required>
	            </h4>
	        </div>
	        <button type="submit"><b>Submit</b></button>
	    </form>
	</div>
	</center>
</body>
</html>