<?php

if (isset($_POST['submit'])) 
{
	# code...
	$name= $_POST['Username'];
	$password= $_POST['Password'];

	if($name == '' && $password == '')
	{
		header('location: login.php?error=nullvalue');
	}
	else if ($name == '') {
		# code...
		header('location: login.php?error=username');
	}
	// else if (condition) {
	// 	# code...
	// 	header('location: login.php?error=u1');
	// }
	// else if (condition) {
	// 	# code...
	// 	header('location: login.php?error=u2');
	// }
	
	else if($password == ''){
		header('location: login.php?error=password');
	}

	////////////////////////
	else if (strlen($password)<8) {
		# code...
		header('location: login.php?error=p1');
	}
	else if (!preg_match("#[\W]+#",$password)) {
		# code...
		header('location: login.php?error=p2');
	}

	else if($name == $password){
		//$_SESSION['isValid'] = 'true';
		//header('location: homepage.php');
		if(isset($_POST['rememberMe']))
		{
			echo "success";
			//setcookie('Valid', 'true', time()+100000000000000000000000000, '/');
			//header('location: homepage.php');
		}
	}
	else{
		header('location: login.php?error=mismatch');
	}

}

?>