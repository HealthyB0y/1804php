<?php
function pr($a){
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}
session_start();
// session_destroy();
include 'products.php';
// Kiem tra session gio hang
$sessionCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : false; 
pr($sessionCart);
$countItem = 0;
$price = 0;
// Tinh toan so luong san pham va gia trong gio hang
if ($sessionCart != false) {
	for ($i = 0; $i < count($sessionCart); $i++) {
		$countItem += $sessionCart[$i]['quantity'];
		$price += $sessionCart[$i]['price'] * $sessionCart[$i]['quantity'];
	}
}

// foreach ($sessionCart as $key => $item) {
// 	$countItem += $item['quantity'];
// 	$price += $item['price'] * $item['quantity'];
// }
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
	  <div class="panel-heading">CART INFO</div>
	  <div class="panel-body">
	
	  	<div>
	  		<h5>CART ITEMS: <?= $countItem ?></h5>
	  		<h5>CART PRICES: <?= $price ?></h5>
	  	</div>
	  	
	  	<a href="cart_detail.php" class="btn btn-warning">CART DETAIL</a>
	  </div>
	</div>

	<div class="container">
	  <div class="row">
		<?php
		foreach ($products as $key => $product) {
		?>
	    <div class="col-sm">
	      <h3><?= $product['name']?></h3>
	      <h4><?= $product['price']?></h4>
	      <a href="cart.php?id=<?= $product['id']?>" class="btn btn-primary">ADD TO CART</a>
	    </div>
	  <?php
		}
	  ?>
	  </div>
	</div>

</body>
</html>