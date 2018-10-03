<?php  
	/**
	 * 
	 */
	class BaseController 
	{
		public function render($fileName,$data = []){
			include 'views/'. $fileName . '.php';
		}
	}
?>