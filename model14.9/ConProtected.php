<?php
include './MonProtected.php';
/**
 * 
 */
class ConProtected extends MonProtected
{
	
	function __construct()
	{
		# code...
		$this->money = $this->getMoney();
	}

	public function getMoneyOfMon(){
		return $this->money;
	}
}

$newCon = new ConProtected();
var_dump($newCon->getMoneyOfMon());