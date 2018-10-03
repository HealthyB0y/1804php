<?php
session_start();
// session_destroy();
include 'products.php';				
// Kiem tra session gio hang
$sessionCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : false; 
// var_dump($sessionCart);
$countItem = 0;
$price = 0;
// Tinh toan so luong san pham va gia trong gio hang
if ($sessionCart != false) {
	for ($i = 0; $i < count($sessionCart); $i++) {
		$countItem += $sessionCart[$i]['quantity'];
		$price += $sessionCart[$i]['price'] * $sessionCart[$i]['quantity'];
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>GIO HANG</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="panel panel-success">
	  <div class="panel-heading">CART DETAIL</div>
	  <div class="panel-body">
	    <?php if ($countItem>0){
	  	?>
	  	<table class="table">
	  		<thead>
	  			<tr>
	  				<th>Product Name</th>
	  				<th>Quantity</th>
	  				<th>Price</th>
	  				<th>Action</th>
	  			</tr>
	  		</thead>
	  		<tbody>
	  			<?php
  				foreach ($sessionCart as $key => $item) {
	  			?>
	  			<tr>
	  				<td><?= $item['name']?></td>
	  				<td><?= $item['quantity']?></td>
	  				<td><?= $item['price'] * $item['quantity']?></td>
	  				<td>
	  					<a href="cart.php?id=<?= $item['id']?>&type='detail'" class="btn btn-success">+</a>
	  					<a href="minus_product.php?id=<?= $item['id']?>" class="btn btn-danger">-</a>
	  				</td>
	  			</tr>
	  			<?php
	  			} 
	  			?>
	  		</tbody>
	  	</table>
	  	<div>
	  		<h5>CART ITEMS: <?= $countItem ?></h5>
	  		<h5>CART PRICES: <?= $price ?></h5>
	  	</div>
	  	<?php
	  	}else{
	  		echo "<h1>Khong co san pham trong gio hang";
	  	}
	  	?>
	  	<a href="index.php" class="btn btn-warning">INDEX</a>
	  </div>
	</div>
</body>
</html>