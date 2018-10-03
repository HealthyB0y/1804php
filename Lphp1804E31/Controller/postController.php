<?php
	include 'BaseController.php';
	include './Models/PostModel.php';
	/**
	 * 
	 */
	class PostController extends BaseController
	{
		
		public function index(){
			$postModel = new PostModel();
			$posts = $postModel ->find()->getAll();
			$this->render('post',$posts);
		}
	}