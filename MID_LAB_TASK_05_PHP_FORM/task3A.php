<?php

if(isset($_POST['submit'])){

	$DOB =  $_POST['DOB'];
	if($DOB == "" ){
		echo "Null submission...";
	}else{
		echo "Your Date of Brith is  ";
		echo $DOB;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATE OF BIRTH</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend> Date of Birth </legend>
	<table>
		<tr>
			<td>
				<input type="date" name="DOB"  value="">
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