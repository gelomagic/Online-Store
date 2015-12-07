<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="online_store.css" />
<h1> Online Store </h1>
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

<?php
session_start();
if(empty($_SESSION['names'])){
		$_SESSION['names']=array();	
}
?>
<form action="Sessions.php" method="post">
Email : <input type = 'email', name = 'email' required>
Password : <input type = 'password', name = 'password' required>
<input type="submit" value="Login">
</form>
<?php


if(!empty($_POST)) {
array_push($_SESSION['names'], array(
	'email' => $_POST['email'],
	'password' => $_POST['password']));

if(!empty($_SESSION['names'])){
}
}

?>

<?php 
foreach($_SESSION['names'] as $row){
echo $row['email']." --- ".$row['password']." --- "."<br>";
}?>
