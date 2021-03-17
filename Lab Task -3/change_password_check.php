<?php

if (isset($_POST['submit'])) 
{
	# code...
	$cpassword= $_POST['CPassword'];
    $npassword= $_POST['NPassword'];
    $rpassword= $_POST['RPassword'];

	if($cpassword == '' && $npassword == '' && $rpassword == '')
	{
		header('location: change_password.php?error=nullvalue');
	}
	else if ($cpassword == '') 
	{
		# code...
		header('location: change_password.php?error=cp');
	}

	else if ($npassword == '') 
	{
		# code...
		header('location: change_password.php?error=np');
	}
	
	else if($rpassword == '')
	{
		header('location: change_password.php?error=rp');
	}

	else if($cpassword == $npassword || $cpassword == $rpassword)
	{
		header('location: change_password.php?error=cnrp');
	}

	
	////////////////////////
	else if (strlen($npassword)<8) {
		# code...
		header('location: change_password.php?error=np1');
	}
	else if (!preg_match("#[\W]+#",$npassword)) {
		# code...
		header('location: change_password.php?error=np2');
	}

	else if($npassword == $rpassword){
		//$_SESSION['isValid'] = 'true';
		header('location: login.php');
		if(isset($_POST['rememberMe']))
		{
			echo "success";
			//setcookie('Valid', 'true', time()+100000000000000000000000000, '/');
			
		}
	}
	else{
		header('location: change_password.php?error=mismatch');
	}

}

?>