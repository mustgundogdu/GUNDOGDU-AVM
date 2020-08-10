<?php
session_start();
//mysql gundogdu_avm database connect

$conn =  mysqli_connect('localhost', 'yolgezer' , 'g1b3kc4t', 'gundogdu_avm');

if (!$conn)
{
	die("Connection Failed!");

}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	$username = $_POST['u_name'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$c_password = $_POST['pass1'];

	$errors = [];
	$succ = [];
	$fail = [];
	$localIP = $_SERVER['HTTP_HOST']; 
	
	if(empty($username) || empty($email) || empty($password) || empty($c_password))
	{

		$errors['client_fail'] = "you must not empty";
		$msg = $errors['client_fail'];
                header("Location: http://$localIP/message.php?client_fail=$msg");


	}
	else{

		if($password != $c_password)
		{
			$errors['pass1'] = 'The two passwords do not match!';
			$msg = $errors['pass1'];
			header("Location: http://$localIP/message.php?msg=$msg");
			
		}
		elseif($password == $c_password){
		
			$sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0)
			{
		
				$errors['email'] = "Email already exists";
				$msg = $errors['email'];
				header("Location: http://$localIP/message.php?msg=$msg");


			}
			$sql_uname = "SELECT * FROM users WHERE username='$username' LIMIT 1";
			$r_u = mysqli_query($conn, $sql_uname);

			if (mysqli_num_rows($r_u) > 0)
			{
				$errors['u_name'] = "Username already is exists";
				$msg = $errors['u_name'];
				header("Location: http://$localIP/message.php?msg=$msg");

			
			}
			if (count($errors) == 0)
			{
		
				$query = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
				if(mysqli_query($conn, $query))
				{
					$succ['success'] = "Register Succesfully";
					$success = $succ['success'];
					header("Location: http://$localIP/message.php?success=$success");

				}
				else
				{
					$fail['register'] = "Register Failed!";
					$f = $fail['register'];
					header("Location: http://$localIP/message.php?fail=$f");


				}


	
			}	
		}
	}

}
?>
