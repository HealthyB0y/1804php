<?php
include '../connect.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$id = $_POST['postId'];
	$query = "select * from posts
		where id = $id
	";

	$queryData = $connection->prepare($query);
	if($queryData->execute()){
		$queryRemove = "
			delete from posts where id=$id
		";
		$queryRemoveData = $connection->prepare($queryRemove);
		$status = $queryRemoveData->execute()? "success" : "fail";
		sleep(2);
		echo json_encode(['status' => $status, 'data' => $id]);
	}
}
?>