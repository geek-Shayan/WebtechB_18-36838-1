<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
</head>
<body>
<form action="registartioncheck.php" method="POST">
		<fieldset  style= "width: 350">
			<legend><b><i>REGISTRATION</i></b></legend>
			<table border="0">

				<tr>
					<td>Name :</td>
					<td><input type="text" name="name"></td>

				</tr>
				<tr>
					<td colspan="2"><hr></td>
				</tr>

				<tr>
					<td>Email :</td>
					<td><input type="email" name="email">
						<abbr title="sampl@ample.com"><B>i</B> </abbr>

					</td>

				</tr>
				</tr>
				<tr>
					<td colspan="2"><hr></td>
				</tr>

				<tr>
					<td>User Name :</td>
					<td><input type="text" name="username"></td>

				</tr>
				</tr>
				<tr>
					<td colspan="2"><hr></td>
				</tr>

				<tr>
					<td>New Password :</td>
					<td><input type="Password" name="npassword"></td>
				</tr>
				</tr>
				<tr>
					<td colspan="2"><hr></td>
				</tr>

				<tr>
					<td>Confirm Password :</td>
					<td><input type="Password" name="cpassword"></td>

				</tr>
				</tr>
				<tr>
					<td colspan="2"><hr></td>
				</tr>

			</table>

				<fieldset style="width: 300">
					<legend>Gender</legend>
					<input type="radio" name="Gender" value="Male">Male
					<input type="radio" name="Gender" value="Female">Female
					<input type="radio" name="Gender" value="Others">Others
				</fieldset>
				<hr>

				<fieldset style="width: 300">
					<legend>Date of Birth</legend>
					<!-- <input type="text" size="1" name="Date"> /
					<input type="text" size="1" name="Month"> / -->
					<input type="date"  name="dob"> 
				</fieldset>
				<hr>
					
			 
                <input type="submit" name="submit" value="Submit"> 

                <input type="Reset" name="Reset"> 

		</fieldset>

	</form>

</body>
</html>
	
	

