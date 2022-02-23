<?php 

	session_start();
	//unset($_SESSION['status']);
	setcookie('status', 'true', time()-10, '/');
	header('location: login.php');

?>