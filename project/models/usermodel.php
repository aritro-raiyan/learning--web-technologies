<?php

	function reg ($name, $email, $username, $password, $gender, $date, $month, $year) {
		$con = mysqli_connect('localhost', 'root', '', 'fff_db');
		$sql = "insert into userinfo values ('{$name}', '{$email}', '{$username}', '{$password}', '{$gender}', {$date}, {$month}, {$year})";
		$result = mysqli_query($con, $sql);

		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	function login ($username, $password) {
		$con = mysqli_connect('localhost', 'root', '', 'fff_db');
		$sql = "select * from userinfo where username = '{$username}' and password = '{$password}'";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result)) {
			return true;
		} else {
			return false;
		}
	}

?>