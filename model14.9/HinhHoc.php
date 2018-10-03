<?php
/**
 * 
 */
class HinhHoc
{
	public $name;
	public $type;

	function __construct($name = 'Hinh Hoc', $type = 'Hinh')
	{
		# code...
		$this->name =$name;
		$this->type =$type;
	}

	public function getName(){
		return $this->name;
	}

	public function cals(){
		echo "Dien tich";
	}
}