<?php
	if(isset($_GET['error']))
    {
		if ($_GET['error'] == 'nullvalue') {
			# code...
			echo "Username and Password are Empty";
		}
        else if ($_GET['error'] == 'username') {
            echo "Username Empty";
        }
        else if ($_GET['error'] == 'password') {
            echo "Password Empty";
        }
        else if ($_GET['error'] == 'mismatch') {
            echo "Username and Password don't match";
        }
		else if ($_GET['error'] == 'p1') {
			# code...
			echo "Password length is less then 8 charecters";
		}
		else if ($_GET['error'] == 'p2') {
			# code...
			echo "Password should have atleast 1 special charecter";
		}
    }
    if(isset($_COOKIE['Valid']))
    {
        header('location: profile.php');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
</head>
<body>
	<form action="logincheck.php" method="POST">
		<fieldset style="width: 350">
			<legend ><b><i>LOGIN</i></b></legend>
			<table border="0">

				<tr>
					<td>User Name :</td>
					<td><input type="text" name="Username"></td>

				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="Password" name="Password"></td>


				</tr>

			</table>

				<hr>
					
				<input  type="checkbox" name="checkRemember">Remember Me
				<br><br><a href="change_password.php">Forgot Password?</a>
				<br> <br>Don't have an account?<a href="registration.php">Register</a> <br> <br>
                <input type="submit" name="submit" value="Submit"> 

		</fieldset>

	</form>
</body>
</html>
