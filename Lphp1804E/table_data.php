<?php
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
$array_5 =[
	"id" => 3,
	"name" => "tuan",
	"address" => "HN"
];

array_push($array_4, $array_5);

echo sizeof($array_4);
echo "<br/>";
?>


<table border="1">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Address</th>
	</thead>
	<tbody>
		<?php
			foreach ($array_4 as $key => $value) {
			?>
			<tr>
				<td><?php echo $value["id"]; ?></td>
				<td><?php echo $value["name"]; ?></td>
				<td><?php echo $value["address"]; ?></td>

			</tr>
			<?php

}
		?>
		
	</tbody>
</table>
