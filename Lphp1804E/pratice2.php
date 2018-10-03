<?php
	$a =2;
	$b =3;
	$c =4;
	$d = $b*$b - 4*$a*$c;
	// var_dump($d);//in cho kết quả
	// die();

	echo ($a==0) ? "khong phai pt bac 2" :
	(( $d > 0 ) ? " x1 = (- $b - sqrt($d)) / (2*$a) ; x2= (- $b + sqrt($d)) / (2*$a) " 
	:( ( $d == 0) ? " x = -$b / (2*$a) " : " vo nghiem "));