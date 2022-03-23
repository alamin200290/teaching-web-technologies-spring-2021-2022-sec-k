<?php 

function getConnection(){
		$host = "localhost";
		$dbname= "webtech";
		$dbuser = "root";
		$dbpass = "";

		$con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $con;
	}

?>