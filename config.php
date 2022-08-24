<?php 
	session_start();

	// connect to database
    $conn = mysqli_connect("localhost", "root", "", "complete-blog-php");

    if (!$conn) {
        die("Error connecting to database:" . mysqli_connect_error());
    }

	define ('ROOT_PATH', '/opt/lampp/htdocs/complete-blog-php/');
	define('BASE_URL', 'http://localhost/complete-blog-php/');
?>