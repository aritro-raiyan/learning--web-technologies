<?php

	require '../models/usermodel.php';
	if (isset($_REQUEST['submit'])) 
	{

		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$date = $_POST['mydate'];
		$month = $_POST['mymonth'];
		$year = $_POST['myyear'];
		if (isset($_POST['gender'])) 
		{
			$gender = $_POST['gender'];
		}

		if ($name != null && $email != null && $username != null &&  $password != null && $gender != null && $date != null && $month != null && $year != null)
		{
			if ($password == $confirmpassword) 
			{
				reg($name, $email, $username, $password, $gender, $date, $month, $year);
				

			/*$user = ['username'=> $username, 'password'=>$password, 'email'=> $email];
			$_SESSION['user'] = $user;

			$user = $name."|".$email."|".$username."|".$password."|".$gender."|".$date."|".$month."|".$year."\r\n";
			$file = fopen('../models/user.txt', 'a');
			fwrite($file, $user);*/

			$src = $_FILES['myfile']['tmp_name'];
			$extension = end(explode(".", $_FILES['myfile']['name']));
			$filename = $username.'.'.$extension;
			$des = '../models/upload/'.$filename;
			move_uploaded_file($src, $des);

			header('location: ../views/login.php');
			}
			else 
			{
				header('location: ../views/reg.php?msg=error');
			}
		} 
		else 
		{
			echo "Null Submission!";
		}
	
	}

?>