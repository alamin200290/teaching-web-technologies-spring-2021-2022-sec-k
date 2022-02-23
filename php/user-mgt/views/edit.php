<?php 
	include('header.php');
?>

<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<a href="userlist.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="">
		<fieldset>
			<legend>Add new User</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="ABC"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="123"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="alamin@aub.edu"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>