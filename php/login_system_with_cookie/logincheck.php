<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
			$user = $_SESSION['user'];
			if($user['username'] == $username && $user['password'] == $password){
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');

				header('location: home.php');
			}else{
				echo "invalid user..";
			}

		}else{
			echo "null submission";
		}
	}
?>
