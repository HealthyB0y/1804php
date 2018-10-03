<?php
	//mang
		//khai bao
$array_1 = array(1,2,3);
$array_2 = [4,5,6];
echo sizeof($array_1);
for ($i=0; $i < sizeof($array_1); $i++) { 
	# code...
	echo " $array_1[$i]";
}
array_push($array_2, 20);
var_dump($array_2);

$i = 0;
while ( $i < sizeof($array_2)) {
	# code...
	echo " $array_2[$i] ";
	$i++;
}

$array_3 = ["ten" => "tuan"];

echo "<br/>";
echo $array_3["ten"];

$array_4 = [
	[
		"id" => 1,
		"name" => "hoang",
		"address" => "BG"

	],
	[
		"id" => 2,
		"name" => "T3H",
		"address" => "HN"
	]

];
echo "<br/>";
echo sizeof($array_4);
echo "<br/>";

foreach ($array_4 as $key => $value) {
	# code...
	echo "ID: $key:" . $value["id"];
	echo "\n";
}

