<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Home</title>
</head>
<body>
    <table border='1' cellpadding="10" align="center" width="60%" style="border-collapse: collapse">
    <tr height="15px">
        <td align="left"><img src="img/logo.png" width="15%"></td>
        <td align="center"><a href="index.php">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a></td>
    </tr>
    <tr align="center" height="600px">
        <td colspan="2" align="center"width="60%">
            
        <form action="registartioncheck.php" method="POST">
		<fieldset>
			<legend>REGISTRATION</legend>
			<table align="center">

				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name"></td>
				</tr>
				<tr><td colspan="2"><hr></td></tr>

				<tr>
					<td>Email </td>
					<td>: <input type="email" name="email">
						<abbr title="sampl@ample.com"><b>i</b> </abbr>
					</td>
				</tr>

                <tr><td colspan="2"><hr></td></tr>

				<tr>
					<td>User Name</td>
					<td>: <input type="text" name="username"></td>
				</tr>

                <tr><td colspan="2"><hr></td></tr>
				<tr>
					<td>New Password</td>
					<td>: <input type="Password" name="npassword"></td>
				</tr>

                <tr><td colspan="2"><hr></td></tr>
				
                <tr>
					<td>Confirm Password</td>
					<td>: <input type="Password" name="cpassword"></td>
				</tr>
                <tr><td colspan="2"><hr></td></tr>

			</table>

				<fieldset>
					<legend>Gender</legend>
					<input type="radio" name="Gender" value="Male">Male
					<input type="radio" name="Gender" value="Female">Female
					<input type="radio" name="Gender" value="Others">Others
				</fieldset>
				<hr>

				<fieldset>
					<legend>Date of Birth</legend>
					<input type="date"  name="dob"> 
				</fieldset>
				<hr>
					
			 
                <input type="submit" name="submit"> 

                <input type="Reset" name="reset"> 

		</fieldset>

	</form>
            
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </td>
    </tr>
    <tr><td colspan="2" align="center" height="55px"><?php include_once('includes/footer.php');?></td></tr>
    </table>
</body>
</html>