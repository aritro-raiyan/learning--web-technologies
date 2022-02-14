<?php

if(isset($_POST['submit'])){

	$degree =  $_POST['degree'];
	if($degree == "" ){
		echo "Null submission...";
	}else{
		echo "Degree is  ";
		echo $degree;
	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Degree Input </title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>DEGREE</legend>
			<input type="checkbox" name="degree" value="SSC">SSC
			<input type="checkbox" name="degree" value="HSC">HSC
			<input type="checkbox" name="degree" value="BSc">BSc
			<input type="checkbox" name="degree" value="MSc">MSc
			<br></br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>