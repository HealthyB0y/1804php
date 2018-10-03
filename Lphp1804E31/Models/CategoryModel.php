<?php
include 'BaseModel.php';

/**
 * 
 */
class CategoryModel extends BaseModel
{
	
	function __construct()
	{
		# code...
		parent:: __construct();

	}

	public static function tableName(){
		return 'categories';
	}

	public function find($id = NULL){
		$model = new CategoryModel();
	// 	if($id == NULL){
	// 		$model->query='SELECT * FROM ' .self::tableName();
	// 	} else {
	// $model->query='SELECT * FROM ' .self::tableName(). ' WHERE '. $id .'= id';
	// 	}

		// query đã đk khai báo khi ta trỏ đến


		$model->query = 'SELECT * FROM ' . self::tableName();
		return $model;
	}

/*	public function getAllCategory(){
		$base = new BaseModel();
		// khai báo biến base có dạng BaseModel
		// $base->getConnection();
		// trỏ biến base đến getConnection
		$query = 'select * from ' .CategoryModel::tableName();
		// đưa biến query vào lấy thông tin trong bảng
		$queryData = $base->connection->prepare($query);
		$queryData->setFetchMode(PDO::FETCH_CLASS,CategoryModel::class);
		$queryData->execute();
		$categories = $queryData->fetchAll();
		// kéo dữ liệu tất cả	
		return $categories;
	}

	public function getOneCategory($id){
		$base = new BaseModel();
		// $base->getConnection();

		$query = 'SELECT * FROM '.CategoryModel::tableName().' WHERE ' .$id.'=id';
		$queryData = $base->connection->prepare($query);
		$queryData->setFetchMode(PDO::FETCH_CLASS, CategoryModel::class);
		$queryData->execute();

		$category = $queryData->fetch();
		// kéo dữ liệu fetch
		return $category;
	}
*/
}