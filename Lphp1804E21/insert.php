<form action="save_users.php" method="POST" class="contrainer">
	<input type="text" name="name" placeholder="Name">	<br>
	<input type="password" name="password" 
	placeholder="PWS"> <br>
	<input type="text" name="email" placeholder="Email">
	<br>
	<input type="number" name="phone" placeholder="phone">
	<br>
	<input type="text" name="address" 
	placeholder="address"> <br>
	<input type="radio" name="rule" value="1"> ADMIN <br/>
	<input type="radio" name="rule" value="0">USER <br/>
	<input type="submit" name="submit" value="THEM USER" class="btn btn-success">
	<input type="reset" >
</form>