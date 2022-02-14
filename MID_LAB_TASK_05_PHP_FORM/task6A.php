<?php

if(isset($_POST['submit'])){

	$BG =  $_POST['bloodgroup'];
	if($BG == "" ){
		echo "Null submission...";
	}else{
		echo "Your BloodGroup is  ";
		echo $BG;
	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Group</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Choose your BLOOD GROUP: </legend>
			<select name="bloodgroup">
				<option value="AB+">AB+</option>
		    	<option value="AB-">AB-</option>
		    	<option value="A+">A+</option>
		    	<option value="A-">A-</option>
		    	<option value="B+">B+</option>
		    	<option value="B-">B-</option>
		    	<option value="O+">O+</option>
		    	<option value="O-">O-</option>
		    </select><br>
		    <hr>
						<br></br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>