<?php 
session_start();

if(isset($_REQUEST['confirm'])){
	
	$username = $_REQUEST['UserName'];
	$password = $_REQUEST['password'];
	$email = $_REQUEST['email'];

	if($username != null && $password != null && $email != null){
		
		$user = ['username'=> $username, 'password'=>$password, 'email'=>$email];
		$_SESSION['user'] = $user; 
		header('location: login.php');

	}else{
		echo "null submission ....";
	}
}

?>