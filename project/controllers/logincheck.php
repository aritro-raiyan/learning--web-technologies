<?php	
	session_start();
	require '../models/usermodel.php';

	if(isset($_REQUEST['submit']))
	{
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if( $username != null &&  $password != null)
		{
			$status = login ($username, $password);
			if ($status) 
			{
				setcookie('status', 'true', time()+3600, '/');
				header('location: ../views/investorProfile.php');
			} 
			else
			{
				header('location: ../views/login.php?msg=error');
			}
		}
		else 
		{
			echo "null submission";
		}
	}
?>