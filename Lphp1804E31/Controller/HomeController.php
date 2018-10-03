<?php
include './BaseController.php';

class HomeController extends BaseController
{
	public function index(){
		$this->render('home');
	}
}