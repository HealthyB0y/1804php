<?php
/**
 * 
 */
class TriAngle
{	
	function __construct($a=null,$b = null,$c =null)
	{
		# code...		
		$this->canh1 = $a;		
		$this->canh2 = $b;
		$this->canh3 = $c;
		var_dump($this);	
	}

	function setCanh($a=null,$b=null,$c=nul){
		if($a != Null && $b != Null && $c != Null 
			&& $a > 0 && $b > 0 && $c > 0 
			&& ($a + $b >$c) && ($a + $c >$b) && ($c + $b >$a) 
		){
			$this->canh1 = $a;
			$this->canh2 = $b;
			$this->canh3 =$c;
		} else{
			echo "Khong phai 3 canh cua tam giac";
		}
	}

	function calP() {
		return ($this ->canh1 + $this->canh2 + $this->canh3);
	}

	function calS() {
		$p = floatval(($this->claP())/2);
		return sqrt(
			$p= ($p -$this->canh1)*($p -$this->canh2)*($p -$this->canh3)
		);
	}
}