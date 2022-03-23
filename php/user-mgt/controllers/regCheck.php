<?php 
	session_start();
	require('../models/userModel.php');
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){
			
			/*$user = $username."|".$password."|".$email."\r\n";
			$file = fopen('user.txt', 'a');
			fwrite($file, $user);
			fclose($file);*/

			$status = signup($username, $password, $email);
			if($status){
				header('location: ../views/login.php');			
			}else{
				header('location: ../views/reg.php');
			}
	
			
		}else{
			echo "null submission";
		}
	}
?>
