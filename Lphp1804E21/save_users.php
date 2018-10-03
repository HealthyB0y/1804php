<?php
if($_SERVER['REQUEST_METHOD'] =='POST'){
	// kiem tra xem co id ko neu ko thi la false
	$id = isset($_POST['id'])? $_POST['id'] : false;
	$name = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$rule = $_POST['rule'];

	include 'connect.php';
	// id khac false thi update nguoc lai la them moi
	if($id != false){
		$query = " update users
			set
				name = '" . $name ."',
				email = '" . $email ."',
				phone	='" . $phone ."',
				password ='" . $password ."',
				rule 	='" . $rule ."',
				`add` = '" . $address ."'
			where users.id = $id
		";
	} else{
	$query = "insert into users
		(name, email, phone, password, rule, `add`)
		values 
			('" . $name ."', '" . $email ."', '" . $phone ."', '" . $password ."', '" . $rule ."', '" . $address ."')";
			var_dump($query);
	}
	$queryData = $connection->prepare($query);
	$queryData->execute();

	header("Location: index.php");
}
