<?php 

	$con = mysqli_connect('localhost', 'root', '', 'webtech');

	/*if($con){
		echo "success";
	}else{
		echo "Error";
	}*/

	//$sql = "select * from users";
	/*$result = mysqli_query($con, $sql);
	
	while($row = mysqli_fetch_assoc($result)){
		print_r($row);
		echo "<br>";
	}*/

	$sql = "update users set username='{$username}' where id=8";

	if(mysqli_query($con, $sql)){
		echo "updated!";
	}else{
		echo "error";
	}
?>