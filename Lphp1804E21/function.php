<?php
// cu phap


// khi co return 
// neu chi return -> thoat khoi ham
// neu return gia tri -> Tra ve gia tri va thoat khoi ham

function kiem_tra_so_chan($number){
	if($number > 0 && $number%2 == 0){
		echo "Day la so chan";
	} else {
		echo "Day khong phai la so chan";
	}
	echo " ; ";
}


function kiem_tra_so_le($number){
	if($number > 0){
		if ($number%2 !=0) {
			# code...

			return true;
		} else
		{
			return false;
		}
	} else
	{
		return ;
	}
}

// Goi lai ham
// kiem_tra_so_chan(20);
// kiem_tra_so_le(5);

$number = 5;
if(kiem_tra_so_le($number)== true)
{
	echo "La so le";
} else{
	echo "La so chan";
}

echo ":";
$number1 = 20;
if (kiem_tra_so_le($number1) == false) {
	# code...
	echo "Incorrect";
}

