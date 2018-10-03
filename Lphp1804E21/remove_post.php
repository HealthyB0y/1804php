<?php
	include 'connect.php';
	if($_SERVER['REQUEST_METHOD']=="GET"){
		$id = $_GET['id'];
		if($id){
			$query = "select * from posts where id = $id";
			$queryData = $connection -> prepare($query);

			if($queryData->execute()){
				$queryRemove = "delete from posts where id = $id";
				$queryRemoveData = $connection -> prepare($queryRemove);
				if($queryRemoveData->execute())
				{
					header("Location: post_index.php");
				} else
				{
					echo "Cannot Delete From DB";
				}
			} else
			{
				echo "Cannot find post";
			}
		}else{
			echo "Not found ID";
		}
	} else
	{
		echo "Method error";
	}

?>