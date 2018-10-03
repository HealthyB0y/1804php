<?php
	include 'connect.php';
	$query = "select *from users";
	$queryData = $connection->prepare($query);
	$queryData ->execute();
	$users = $queryData -> fetchAll();

	var_dump($users);

?>
<br/>
<br/>
<br/>
<br/>


<table border="1">
	<thead>
		<th>username</th>
		<th>password</th>
		<th>add</th>
		<th>id</th>
	</thead>
	<tbody>
		<?php 
			foreach($users as $user){
		?>
		<tr>
			<td><?=$user['username'] ?></td>
			<td><?=$user['password'] ?></td>
			<td><?=$user['add'] ?></td>
			<td><?=$user['id'] ?></td>
		</tr>
		<?php  
		}
		?>
	</tbody>
	
</table>