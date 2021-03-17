<?php
	if(isset($_GET['error']))
    {
		if ($_GET['error'] == 'nullvalue') {
			# code...
			echo "All Fields are Empty";
		}
        else if ($_GET['error'] == 'cp') {
            echo " Current password Empty";
        }
        else if ($_GET['error'] == 'np') {
            echo "New password Empty";
        }
		else if ($_GET['error'] == 'rp') {
            echo "Re-typed password Empty";
        }

		else if ($_GET['error'] == 'cnrp') {
            echo "New password should be Unique";
        }


        else if ($_GET['error'] == 'mismatch') {
            echo "Password don't match";
        }
		else if ($_GET['error'] == 'np1') {
			# code...
			echo "New Password length is less then 8 charecters";
		}
		else if ($_GET['error'] == 'np2') {
			# code...
			echo "New Password should have atleast 1 special charecter";
		}
    }
    if(isset($_COOKIE['Valid']))
    {
        header('location: profile.php');
    }


?>
<html>
<head> 
	<title>
			Change Password page
	</title>
</head>

<body>
	
	<form action="change_password_check.php" method="POST">
		<fieldset style="width: 350">
			<legend >Change Password</legend>
			<table border="0">

				<tr>
					<td>Current Password :</td>
					<td><input type="Password" name="CPassword"></td>

				</tr>
				<tr>
					<td style="color: green">New Password :</td>
					<td><input type="Password" name="NPassword"></td>


				</tr>
				<tr>
					<td style="color: red"> Retype New Password :</td>
					<td><input type="Password" name="RPassword"></td>

				</tr>
			</table>

				<hr>
					
			 
                <input type="submit" name="submit" value="Submit"> 

		</fieldset>

	</form>

</html>