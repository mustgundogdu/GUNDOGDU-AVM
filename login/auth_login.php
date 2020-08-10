<?php
//mysql Connection
require("../config.php");


//check text values
if ($_POST['user'] and $_POST['pass'])
	{

		$username = $_POST['user'];
		$password = $_POST['pass'];
		$errors = [];
		$localIP = $_SERVER['HTTP_HOST'];
		$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$val = mysqli_num_rows($result);

		if($val == 1)
		{

			
			$row=mysqli_fetch_assoc( $result );
			session_start();

			$_SESSION['login_user'] = $username;
			header("Location: ../welcome.php");
			$_SESSION['userid'] = $row['id'];
			
		}
		else
		{
			$errors['login_fail'] = "Invalid Username Or Password";
			$msg = $errors['login_fail'];
			header("Location: http://$localIP/message.php?login_fail=$msg");
			

		}
		

	}

?>
