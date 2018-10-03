<?php
	session_start();
	 var_dump($_SESSION);
	// kiem tra bien $_SESSION['login'],neu co ->user dang nhap
	if(isset($_SESSION['login'])){
		$user = $_SESSION['login'];
		echo "Hello" . $user['username'];
		echo "<a href='logout.php'> LOGOUT</a>";
	} else{
?>


<form action="check_login.php" method="post">
	<input type="text" name="username" placeholder="username">	
	<input type="password" name="password" placeholder="password">	
	<input type="submit" value="SUBMIT">	
	<input type="reset" value="RESET">	
</form>
<?php
}
?>
