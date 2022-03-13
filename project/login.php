<?php 
?>

<html>
<head>
	<title>login</title>
</head>
<body>
	<form method="POST" action="logincheck.php">
		<table>
			<tr>
				<td>Email</td>
				<td>
					<input type="email" name="email" value="">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" value="">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>