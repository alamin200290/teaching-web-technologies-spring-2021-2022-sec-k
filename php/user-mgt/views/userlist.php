<?php 
	include('header.php');
?>

<html>
<head>
	<title>User List</title>
</head>
<body>

	<a href="home.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

		<table border="1">
			<tr>
				<td>ID</td>
				<td>USERNAME</td>
				<td>EMAIL</td>
				<td>PASSWORD</td>
				<td>ACTION</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Alamin</td>
				<td>alamin@aiub.edu</td>
				<td>123</td>
				<td>
					<a href="edit.php"> EDIT </a> | 
					<a href="delete.php"> DELETE </a>  
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>XYZ</td>
				<td>abc@aiub.edu</td>
				<td>123</td>
				<td>
					<a href="edit.php"> EDIT </a> | 
					<a href="delete.php"> DELETE </a>  
				</td>
			</tr>
			
		</table>
		</fieldset>
	</form>
</body>
</html>