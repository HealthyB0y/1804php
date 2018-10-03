<?php

// khai bao user session
include 'data.php';
session_start();
// kiem tra phuong thuc gui request
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
// kiem tra nguoi dung da nhap du lieu chua
		if($_POST['username'] && $_POST['password']){
			$username = $_POST['username'];
			$password = $_POST['password'];

			foreach ($users as $key => $user) {
				# code...
				if($user['username'] == $username && $user['password'] == $password)
				{
					$_SESSION['login'] = $user;	
					// var_dump($_SESSION['login']);
					header('Location:login.php');
					break;
				}
			}

			echo "Not found";
			echo "<a href='login.php'> LOGIN</a>";
		} else{
			echo "Check you input!";
		}
	}else{
		echo "METHOD ERROR";
	}