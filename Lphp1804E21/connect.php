<?php
	define('DB_HOST', 'localhost');
	define('DB_NAME', '1804');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
try{
	$connection = new PDO("mysql:host=" .DB_HOST. 
		";dbname=" . DB_NAME,DB_USERNAME,DB_PASSWORD);

	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e)
{
	echo "Connection failed: " . $e ->getMessage();
}