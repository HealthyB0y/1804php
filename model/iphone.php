<?php
include 'Smartphone.php';
class Iphone extends Smartphone{
	function __construct($name = 'abc'){
		$this->name =$name;
		echo "<br>";
	}

	function getTouchId(){

	}
}
$iphone = new iphone();
pr($iphone->name);
$iphone->setName('iphone 6s');
pr($iphone->getName());
