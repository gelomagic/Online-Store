<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="online_store.css"/>
<h1> Add Products</h1>
</head>
<header>
<div id="online_store">
<ul>
<li><a href="online_store.php">Home</a></li>
<li><a href="products.php">Products</a></li>
<li><a href="add_product.php">Add Products</a></li>
</ul>
</div>
</header>
<br>


<form method>
	Name: 		<input type = 'name', name = 'name' required><br>
	Quantity:	<input type = 'number', name = 'quantity' required><br>
	Price:		<input type = 'number', name = 'price' required><br><br>

	Photo<br>
				<input type = 'file' name = 'choose_file' required><br><br>
				<button type = 'submit'>Add Product</button>
</form>
