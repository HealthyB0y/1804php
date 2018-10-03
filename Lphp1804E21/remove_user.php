<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
	// kiem tra gia tri tham so id
	if($_GET['id']){
		$id = $_GET['id'];

		include 'connect.php';
		// kiem tra du lieu id trong co so du lieu
		$query = "select * from users where id = $id";
		$queryData = $connection -> prepare($query);
		// neu ton tai thuc hien xoa
		if ($queryData->execute()) {
			# code...
			$removeQuery = "delete from users where id = $id";
			$removeQueryData = $connection -> prepare($removeQuery);
			$removeQueryData->execute();
			header('location: index.php');
		} else{
			echo "Khong ton tai id!";
			echo "<a href ='index.php'> BACK <a/>;";

		}
	}
}
?>
	