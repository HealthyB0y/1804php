<?php

/*function pr($a){
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}
// include './Models/PostModel.php';
include './Models/CategoryModel.php';

$allPost = new CategoryModel();
$category=$allPost->find()->where(['id','>',1])->getAll();
// var_dump($allPost->where(['id','>',1]));
var_dump($category);
// $allPost = new PostModel();
// pr($allPost->getAllPost());

// pr($allPost->getOneCategory(2));	
// var_dump($allPost->getOnePost(2));
// var_dump($allPost->getOneCategory(1));*/
if(isset($_GET['redirect'])){
	$url = $_GET['redirect'];
	//ucfirst la viet hoa dau
	$controllerName = $url.'Controller';
	include './Controller/'. $controllerName .'.php';
	$newController = new $controllerName();
	$newController->index();

}