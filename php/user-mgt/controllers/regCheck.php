<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){
			/*$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
			$_SESSION['user'] = $user;*/

			$user = $username."|".$password."|".$email."\r\n";
			$file = fopen('user.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: login.php');
			
		}else{
			echo "null submission";
		}
	}
?>
