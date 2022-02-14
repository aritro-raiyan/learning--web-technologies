<?php

if(isset($_POST['submit'])){

	$email =  $_POST['email'];
	if($email == "" ){
		echo "Null submission...";
	}else{
		echo "Your email is  ";
		echo $email;
	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend> EMAIL </legend>
	<table>
		<tr>
			<td>
				<input type="email" name="email" value="">
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