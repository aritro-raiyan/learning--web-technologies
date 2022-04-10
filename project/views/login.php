<?php 

	$error = "";

	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'error'){
			$error = "Invaild Username/Password!";
		}
	}
?>
<html>
	<head>
		<script type="text/javascript">
			function ajax(){
			let username = document.getElementById('username').value;
			let http = new XMLHttpRequest();

			//http.open('GET', 'abc.php?uname='+username, true);
			http.open('POST', '../controllers/jsfunction.php', true);
			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			http.send('uname='+username);
			http.onreadystatechange = function(){

				
				if(this.readyState == 4 && this.status == 200){
					//alert(this.responseText);
					document.getElementById('username').innerHTML= this.responseText;
					//document.getElementById('msg').innerHTML = "";
				}
			}
		}
	</script>
		<title> Login </title>

	</head>
	<body>

		<form method="POST" action="../controllers/logincheck.php">
			<table width="100%">
				<tr height="90px" bgcolor="GreenYellow">
					<td width="95%">
						<h2> Fresh Farm Finance: Agriculture Crowdfunding </h2>
					</td>
					<td align="right">
						<a href="homepage.php"> Home  </a>
						<a href="reg.php"> Registration </a>
					</td>
				</tr>
				<tr height="540px">
					<td colspan="3" align="center">
						<form>
							<fieldset>
								<legend> LOGIN </legend>
								<table>
									<tr>
										<td > User Name: </td>
										<td> <input id="username" type="text" name="username" value="" > </td>
										<td><input type="button" name="" value="click" onclick="ajax()"></td>
									</tr>
									<tr>
										<td> Password: </td>
										<td> <input type="password" name="password" value="" required> </td>
									</tr>
									<tr>
										
									</tr>
									<tr>
										<td>
											<br>
											<input type="submit" name="submit" value="Submit" onclick="alert('test')>
											<br>
											<?=$error?>
										</td>
									</tr>
								</table>
							</fieldset>
						</form>
					</td>
				</tr>
				<tr height="50px">
					<td align="center" colspan="3">
						<p>FFF:AgricultureCrowdfunding copyright @2022</p>
					</td>
				</tr>
			</table>
		</form>
		

	</body>
</html>