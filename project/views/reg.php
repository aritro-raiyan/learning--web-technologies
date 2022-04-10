<?php 

    $error = "";

    if(isset($_REQUEST['msg'])){
        if($_REQUEST['msg'] == 'error'){
            $error = "Password did not match!";
        }
    }

?>
<html>
    <head>
        <title> Registration </title>
    </head>
    <body>
        <?php require '../controllers/jsfunction.php'; ?>
        <form name="myform" method="POST" action=" ../controllers/regcheck.php" enctype="multipart/form-data" onsubmit="return validateForm()">
            <table width="100%">
                <tr height="80px" bgcolor="GreenYellow">
                    <td width="85%">
                        <h2> Fresh Farm Finance: Agriculture Crowdfunding </h2>
                    </td>
                    <td align="right">
                        <a href="homepage.php"> Home | </a>
                        <a href="login.php"> Login </a>
                    </td>
                </tr>
                <tr height="540px">
                    <td colspan="3" align="center">
                        <form>
                            <fieldset>
                                <legend> REGISTRATION </legend>
                                <table>
                                    <tr>
                                        <td> Name: </td>
                                        <td> <input type="text" name="name" value=""> </td>
                                    </tr>
                                    <tr>
                                        <td> Email: </td>
                                        <td> <input type="email" name="email" value="" required> </td>
                                    </tr>
                                    <tr>
                                        <td> User Name:</td>
                                        <td> <input type="text" name="username" value=""> </td>
                                    </tr>
                                    <tr>
                                        <td> Password: </td>
                                        <td> <input type="password" name="password" value="" required> </td>
                                    </tr>
                                    <tr>
                                        <td> Confirm Password: </td>
                                        <td> <input type="password" name="confirmpassword" value="" > <?=$error?> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <fieldset>
                                                <legend> Gender </legend>
                                                <input type="radio" name="gender" value="Male"> Male
                                                <input type="radio" name="gender" value="Female"> Female
                                                <input type="radio" name="gender" value="Other"> Other <br>
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <fieldset>
                                                <legend> Date of Birth </legend>
                                                <input type="text" name="mydate" value="" size="1"> /
                                                <input type="text" name="mymonth" value="" size="1"> /
                                                <input type="text" name="myyear" value="" size="1">
                                                <i> (dd/mm/yyyy) </i>
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <fieldset>
                                                <legend> Upload Profile Picture </legend>
                                                <input type="file" name="myfile">
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="submit" name="submit" value="Submit">
                                            <input type="reset" name="reset" value="Reset">
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