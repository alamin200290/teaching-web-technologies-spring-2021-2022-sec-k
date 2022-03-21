<?php 

	$unameError = "";
	$username = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['username'] == null){
			$unameError = "username is empty....";
		}else{
			$username = $_REQUEST['username'];
			//echo "Success";
		}
	}
?>


<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?=$username?>"></td>
				<td>
					<?= $unameError ?>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>