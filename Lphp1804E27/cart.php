<?php
// 1. Khoi tao session
session_start();
include 'products.php';
// 2. Kiem tra request method
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	// 2.1 Lay id cua product
	$id = $_GET['id'] ? $_GET['id'] : false;
	$type = isset($_GET['type']) ? $_GET['type'] : 'index';
	// 3. Kiem tra san pham co ton tai hay khong
	$item = null;
	foreach ($products as $key => $product) {
		if ($id == $product['id']) {
			// 3.1 Neu co thi gan $item = san pham do
			$item = $product;
			// 3.2 Thoat khoi foreach de tiep tuc xu ly
			break;
		}
	}
	
	// 4. Kiem tra session gio hang co ton tai hay khong
	if (!isset($_SESSION['cart'])) {
		// 4.1 Neu khong co session gio hang
		$cartItem = [
			'id' => $item['id'],
			'name' => $item['name'],
			'price' => $item['price'],
			'quantity' => 1
		];
		// Tao ra session gio hang la 1 mang rong
		$_SESSION['cart'] = [];
		// Dua san pham voi so luong = 1 vao session gio hang
		array_push($_SESSION['cart'], $cartItem);
	} else {
		// 5. Neu co session gio hang roi
		$hasItem = false;
		// 5.1 Neu san pham them vao da ton tai trong gio hang
		for ($i=0; $i < count($_SESSION['cart']); $i++) {
			if ($id == $_SESSION['cart'][$i]['id']) {
				$_SESSION['cart'][$i]['quantity']++;
				$hasItem = true;
				break;
			}
		}
		// 5.2 Neu san pham them vao chua co trong gio hang
		if ($hasItem == false) {
			$cartItem = [
				'id' => $item['id'],
				'name' => $item['name'],
				'price' => $item['price'],
				'quantity' => 1
			];
			array_push($_SESSION['cart'], $cartItem);
		}

	}
	if($type == 'index'){
		header('Location:index.php');
	} else
	{
		header('Location:cart_detail.php');
	}
} else {
	echo "METHOD ERROR";
}