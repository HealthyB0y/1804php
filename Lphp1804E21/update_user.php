<?php

function pr($a){
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}

if($_SERVER['REQUEST_METHOD'] == "GET")
{
	// var_dump($_GET['id']); thong tin id
	pr($_GET['id']);
	if($_GET['id']){
		$id=$_GET['id'];
		include 'connect.php';
		$query = "select * from users where id=$id";
		$queryData=$connection->prepare($query);
		$queryData->execute();

		$user = $queryData -> fetch();
		pr($user);
		if($user['rule']==1){
			$checkAdmin = "check";
			$checkUser = "";

		} else{

			$checkAdmin = "";
			$checkUser ="check";
		}
	}
}

?>
<form action="save_users.php" method="POST">
	<input type="hidden" name="id" value="<?=$user['id']?>">
	<input type="text" name="name" placeholder="Name" value="<?=$user['name']?>"><br>
	<input type="password" name="password" 
	placeholder="PWS" value="<?=$user['password']?>"> <br>
	<input type="text" name="email" placeholder="Email" value="<?=$user['email']?>">
	<br>
	<input type="number" name="phone" placeholder="phone" value="<?=$user['phone']?>">
	<br>
	<input type="text" name="address" 
	placeholder="address" value="<?=$user['add']?>"> <br>
	<input type="radio" name="rule" value="1" <?=$checkAdmin ?>/> ADMIN <br/>
	<input type="radio" name="rule" value="0" <?=$checkUser ?>/>USER <br/>
	<input type="submit" name="submit" value="UPDATE USER">
	<input type="reset" >
</form>

