<?php 
include './HinhHoc.php';
/**
 * 
 */
class HinhVuong extends HinhHoc
{
	public $canh = 5;
	function __construct()
	{
		# code...

	}
	public function cals($canhMoi = 10){
		return $canhMoi * $canhMoi;
	}
}

$hinhVuong = new HinhVuong();
var_dump($hinhVuong -> cals());