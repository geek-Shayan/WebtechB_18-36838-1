<?php
    require_once('includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <table border='1' cellpadding="10" align="center" height="600px" width="60%" style="border-collapse: collapse">
    <tr height="15px">
        <td align="left" ><img src="img/logo.png" width="15%"></td>
        <td align="right">Logged in as <a href="login.php"><?=$_SESSION['name'];?></a> | <a href="logout.php">Logout</a></td>
    </tr>
    <tr align="left" height="500px">
        <td width="20%">Account Details<hr>
            <?php include_once('includes/sidebar.php');?>
        </td>
        <td  align="center"width="60%">
        <form action="changePasswordValidation.php" method="POST">
                    <fieldset>
                        <legend>EDIT PROFILE</legend>
                        <table align="center" height="100px">
                        <tr>
                            <td>Name</td>
                            <td>: <input type="text" name="name"></td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr>
                            <td>Email</td>
                            <td>: <input type="mail" name="email"></td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr>
                            <td>Gender</td>
                            <td>: <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="other">Other</td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>: <input type="date" name="dob"></td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr>
                            <td><input type="submit" name="submit"></td>
                        </tr>
                        </table>
                    </fieldset>
                </form>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center" height="55px">
            <?php include_once('includes/footer.php');?>
        </td>
    </tr>
    </table>
</body>
</html>