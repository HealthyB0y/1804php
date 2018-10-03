<?php
include 'products.php';
session_start();
// 1.kiem tra phuong thuc request
if($_SERVER['REQUEST_METHOD']=='GET'){
	// 2.Kiem tra tham so id truyen vao
	if($_GET['id']){
		$id = $_GET['id'];
		echo "Not found id";
		// 3.Kiem tra san pham co ton tai trong csdl khong
		$item = null;
		foreach ($products as $key => $product) {
			# code...
			if($product['id'] == $id){
				$item = $product;
				break;
			}
		}
		if($item == null){
			echo "Khong ton tai tong co so du lieu";
			die();
		}
		// 4.Kiem tra session cart
		if(!isset($_SESSION['cart'])){
			echo "Khong ton tai session cart";
			die();
		} else{
			$sessionCart = $_SESSION['cart'];
			for($i=0;$i < count($sessionCart);$i++){
				if($sessionCart[$i]['id'] == $id){
					// 5.1 Giam so luong cua sna pham neu co
					$sessionCart[$i]['quantity']--;
					// 5.2 Neu so luong = 0 => Loai bo san pham
					if($sessionCart[$i]['quantity'] <= 0){
						array_splice($sessionCart, $i , 1);
						// array_splice(mang,vitribatdau,so luong)
						break;
					}
				}
			}
			$_SESSION['cart'] = $sessionCart;
		}
	}
	header("Location:cart_detail.php");
} else{
	echo "Method error!";
}



?>