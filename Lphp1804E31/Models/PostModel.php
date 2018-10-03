<?php
include 'BaseModel.php';

/**
 * 
 */
class PostModel extends BaseModel{
	
	function __construct()
	{	
		# code...
		parent:: __construct();
	}

	public static function tableName(){
		return 'posts';
	}

	public function find($id = NULL){
		$model = new PostModel();
	// 	if($id == NULL){
	// 		$model->query='SELECT * FROM ' .self::tableName();
	// 	} else {
	// $model->query='SELECT * FROM ' .self::tableName(). ' WHERE '. $id .'= id';
	// 	}
		$model->query = 'SELECT * FROM ' . self::tableName();

		return $model;
	}

/*	public function getAllPost(){
		$base = new BaseModel;
		// $base->getConnection();

		$query = 'select * from ' .PostModel::tableName();
		$queryData = $base->connection->prepare($query);
		$queryData->setFetchMode(PDO::FETCH_CLASS,PostModel::class);
		$queryData->execute();
		$posts = $queryData->fetchAll();
		// kéo dữ liệu tất cả	
		return $posts;
	}

	public function getOnePost($id){
		$base = new BaseModel();
		// $base->getConnection();

		$query = 'SELECT * FROM '.PostModel::tableName().' WHERE ' .$id . '=id';
		$queryData = $base->connection->prepare($query);
		$queryData->setFetchMode(PDO::FETCH_CLASS, PostModel::class);
		$queryData->execute();

		$post = $queryData->fetch();
		// kéo dữ liệu fetch
		return $post;
	}
*/
}