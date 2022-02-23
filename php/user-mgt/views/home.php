<?php 
	//include('header.php');
	//include_once('header.php');

	require('header.php');
	//require_once('header.php');
?>

<html>
<head>	
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome home! <?=$_SESSION['current_user'][0]?></h1> 

	<a href="create.php"> Create New User </a> |
	<a href="userlist.php"> User list </a> |
	<a href="../controllers/logout.php"> logout </a>

</body>
</html>

