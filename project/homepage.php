<?php
	session_start();
	if(isset($_SESSION['status']))
?>
<html>
	<head>
		<title>Home</title>
	</head>
	<body bgcolor="GreenYellow">
		<table width="100%">
			<tr>
				<td align="center">
					<img src="logo.png" width="50" height="50">
				</td>
			</tr>

			<td align="right">
			<button size=4> <a href="Login.php"> Login </a> </button>
			<button size=4> <a href="reg.php"> Registration </a> </button>
			<button size=4> <a href="faq.php"> FAQ </a> </button>
			<tr height="450px">
				<td align="center">
					<h1>Fresh Farm Finance: Agriculture Crowdfunding</h1>
					<p> We help to get funds & invest on agricultural fields! </p>
					<br> <br>
					<button size=4> <a href="investorProfile.php"> Investor Profile </a> </button>
				</td>
			</tr>
			<tr align="center" height="50px">
				<td>Copyright @2022</td>
			</tr>
		</table>
		
	</body>
</html> 
