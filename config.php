<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("dartanian.gauthierdevelopment.net", "ryangauthier", "6dP*784bP*5E", "gauthierfamily_recipebook");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://www.recipebook.gauthierfamily.online/');
?>

