<?php
function pr($a){
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}


/**
 * 	
 */
class ChaPrivate
{
	private $name;	
	function __construct($name = 'Cha')
	{
		# code...
		$this->name = $name;
	}
	function getName(){
		return $this->name;
	}
	private function goiCha(){
		echo "Bo oi";
	}
	public function goi(){
		return $this-> goicha();
	}
}

$newCha = new ChaPrivate();
$ten = $newCha -> getName();
pr($ten);

$goi = $newCha->goi();
pr($goi);	