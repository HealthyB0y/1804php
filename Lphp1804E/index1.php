<?php
	$number =3;

	// if(!$number <=0 && $number%2 == 0){
	// 	echo "La so chan!";
	// } else
	// {
	// 	echo "khong la so chan!";
	// }

	// if($number > 0){
	// 	if($number % 2 !=0){
	// 		echo "La so le!";
	// 	} else
	// 	{
	// 		echo "La so chan";
	// 	}
	// } else
	// {
	// 	echo "khong phai so nguyen duong";
	// }
	echo ( $number > 0 &&  $number%2 == 0 ) ? "Chan" : "Le";
