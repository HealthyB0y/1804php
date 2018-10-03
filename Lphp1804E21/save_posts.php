<?php 

function pr($a){
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}

if($_SERVER['REQUEST_METHOD']=='POST'){
	$id = isset($_POST['id'])? $_POST['id'] : false;
	$title = $_POST['title'];
	$content = $_POST['content'];
	$desciption = $_POST['desciption'];
	$author = $_POST['author'];
	$status = $_POST['status'];
	$categories_id =$_POST['categories_id'];

	include 'connect.php';

	if($id != false){
		$query = "update posts
			set
				title = '" . $title ."',
				content = '" . $content ."',
				desciption = '" . $desciption ."',
				author = '" . $author ."',
				status = '" . $status ."'
			where posts.id = $id
		";
	} else{
	$query = "insert into posts
		(title, content,desciption,author,status,categories_id)
		values
			('" . $title ."', '" . $content ."', '" . $desciption ."', '" . $author ."','" . $status ."' , '" . $categories_id ."')";
			pr($query);
	}
	$queryData = $connection->prepare($query);
	$queryData->execute();

	header("Location: post_index.php");
}