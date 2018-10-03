<a href="insert.php" class="btn btn-success">Add New</a> 
<!-- button -->
<?php
	// Them ket noi
	include 'connect.php';
	include 'library.php';
	$query = "select * from users";
	// khai bao truy van
	$queryData = $connection->prepare($query);
	// thuc hien truy van
	$queryData->execute();
	// lay du lieu
	$users = $queryData -> fetchAll();

?>
	<!-- lay het thong tin cua users -->
<table class="table">
	<thead>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>phone</th>
		<th>password</th>
		<th>rule</th>
		<th>add</th>
		<th>action</th>
	</thead>
	<tbody>
		<?php
			foreach ($users as $user ) {
				# code...
		?>
		<tr>
			<td><?=$user['id'] ?></td>
			<td><?=$user['name'] ?></td>
			<td><?=$user['email'] ?></td>
			<td><?=$user['phone'] ?></td>
			<td><?=$user['password'] ?></td>
			<td><?php
				if($user['rule'] ){
					echo "ADMIN";
				} else
				{
					echo "USER";
				}
			?></td>
			<td><?=$user['add'] ?></td>
			<td>
				<a href="update_user.php?id=<?= $user['id']?>" class="btn btn-success" >Update</a>
				<a href="remove_user.php?id=<?=$user['id']?>" class="btn btn-warning">Remove</a>
			</td>
			
		</tr>
		<?php
		}
		?>

	</tbody>

</table>

