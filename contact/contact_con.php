<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$localIP = $_SERVER['HTTP_HOST'];
	

	if($_SESSION['login_user'])
	{
		include("config.php");
		//user information
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$msj = [];
		$errors = [];
		$email = $_POST['c_email'];
		$message = $_POST['message'];
		//$localIP = $_SERVER['HTTP_HOST'];
		if(empty($name))
		{
			$errors['name'] = "Name is Required";
			$msg = $errors['name'];
			header("Location: http://$localIP/message.php?contact_fail=$msg");

		}
		if(empty($surname))
		{
			$errors['surname'] = "Surname is Required";
			$msg = $errors['surname'];
			header("Location: http://$localIP/message.php?contact_fail=$msg");

		
		}
		if(empty($email))
		{
			$errors['email'] = "Email is Required";
			$msg = $errors['email'];
			header("Location: http://$localIP/message.php?contact_fail=$msg");
			
		}
		if(count($errors) == 0)
		{
			$date = date("Y/m/d");
			$sql_com = "INSERT INTO contact(name, surname, email, Content ,c_date) VALUES('$name', '$surname', '$email', '$message', '$date')";

		
			if(mysqli_query($conn, $sql_com))
			{
		
				$msj['contact'] = "Your Message is Send";
				$msg = $msj['contact'];
				header("Location: http://$localIP/message.php?contact=$msg");

			}
			else
			{
				$msj['contact_fail'] = "Your Message is Not Send!";
				$msg_fail = $msj['contact_fail'] . mysqli_error($conn);
				header("Location: http://$localIP/message.php?contact_fail=$msg_fail");
		
		
			}
		}

	}
	else
	{
		$msj['login_fail'] = "You must login to send message!";
		$login_fail = $msj['login_fail'];
		header("Location: http://$localIP/message.php?login_fail=$login_fail");

	
	}
}


if($_GET['page'])
{
	
	$file = str_replace('../','',$_GET['page']);
	
	if(isset($file))
	{
		include("$file");
	}
}

?>
