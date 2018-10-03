<?php
function pr($a){
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}
/**
 	khai bao cho 1 classc no tra ve 1 doi tuong
 	class + tendoituong{}
 */
class SmartPhone{
	// Cac thuoc tinh cua doi tuong
	// $display;
	// $ram;
	// $name;


	// ham construct chay vao dau tien khi goi den class
	function __construct(){
		// $this->display = $displaySize;
		// khai bao thuc tinh display
		$this->name = 'samsung';
		// echo ($this->display)
		// echo "<br>";
		// echo ($this->name);
		// echo $this->getName();
	}

	// cac hanh dong (phuong thuc) lien quan den doi tuong

	function getName(){
		// code xu ly lay ten cua smartphone
		// echo $this->getName();
		// echo "SmartPhone";
		return $this->name;
	}

	function setName($name = 'oppo'){
		$this ->name = $name;
		// code xu ly lay ten cua smartphone
	}
	
	function test(){
		$phone = new SmartPhone();
		$phone->name = 'iphone';
		$phone->display = '5';

		return $phone;
	}

}


// $smartphone = new SmartPhone();
	// $smartphone -> display;
	// $smartphone->getName();

	// var_dump($SmartPhone);
