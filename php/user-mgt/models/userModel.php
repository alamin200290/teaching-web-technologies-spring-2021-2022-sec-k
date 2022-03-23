<?php 

	require('db.php');

	function login($username, $password){
		$con = getConnection();

		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function signup($username, $password, $email){
		$con = getConnection();
		$sql = "insert into users values('', '{$username}', '{$password}', '{$email}', 'user')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function getUserById($id){
		$con = getConnection();

	}

	function updateUser($user){
		$con = getConnection();

	}

	function getAlluser(){
		$con = getConnection();

	}

?>