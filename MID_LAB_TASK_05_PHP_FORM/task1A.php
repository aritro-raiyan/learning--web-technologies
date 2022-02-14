<?php

if(isset($_POST['submit'])){

	$username =  $_POST['username'];
	if($username == "" ){
		echo "Null submission...";
	}else{
		echo "Your name is  ";
		echo $username;
	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>USERNAME</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend> Type Your Name </legend>
	<table>
		<tr>
			<td>
				<input type="text" name="username" value="">
			<hr>
			</td>
		</tr>
		<tr>
			<td>
			<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
</table>
		</fieldset>
	</form>
</body>
</html>