<?php
include './ChaPrivate.php';

/**
 * 
 */
class ConPrivate extends ChaPrivate
{
	
	function __construct()
	{
		$this->goiBo();
	}
	public function goiBo(){
		return $this->goi();
	}
}

$newCon = new ConPrivate;
