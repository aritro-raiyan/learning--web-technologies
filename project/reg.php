<?php 
?>
<!DOCTYPE HTML>

<html>

<head>
<title>Profile</title>
</head>
<body>

<div align="center">

<h1>Sign Up</h1>
Upload Your Picture.
<p>
<input type="file" id="myfile" name="myfile">
				
</p>
Enter your name :
<input type="text" name="UserName" size=35 maxlength=35 value="">
</br></br>
Enter your company name :
<input type="text" name="comp" size=35 maxlength=35 value=""> </br> </br>
Previous Investments :
<textarea name="Comments" cols=30 rows=4></textarea> </br> </br>
<label for="email">Enter your email:</label>
<input type="email" id="email" name="email">
</p>
<label for="phone">Enter your phone number:</label>
<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
</br></br>
<label for="pwd">Password:</label>
<input type="password" id="pwd" name="pwd">
<label for="pwd">Confirm Password:</label>
<input type="password" id="pwd" name="pwd">
</br></br>
 <button size=4> <a href="homepage.php"> Cancel </a> </button>
 <button size=4> <a href="homepage.php"> Confirm </a> </button>
</div>
</form>
</body>
</html>