<?php
function pr($a){
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}
/**
 * 
 */
class MonProtected 
{
	protected $money;
	// khai bao thuoc tinh kieu protected
	function __construct($money = "1000usd")
	{
		# code...
		$this->money = $money;
	}

	protected function getMoney(){
		// pr($this->money);
		return $this->money;
	}

	public function getMoneyFree(){
		// pr($this->money);
		return $this->money;
	}
}

$newMon = new MonProtected();
$newMon->getMoneyFree();
// pr($newMon);