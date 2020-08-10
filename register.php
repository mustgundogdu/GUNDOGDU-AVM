<!DOCTYPE HTML>
<html>
	<head>
		<title>
		REGISTER PAGE
		</title>
	
		<link rel="stylesheet" type="text/css" href="/css/register.css">
 		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

	<script>
		
		function validateForm()
		{
			
			var check_user = document.forms["g-form"]["user_name"].value;
			//email value check 
			var check_email = document.forms["g-form"]["e_mail"].value;
			//password value check
			var check_pass = document.forms["g-form"]["pass_word"].value;

			//confirm password value check
			var check_conf_pass = document.forms["g-form"]["c_password"].value;

			if(check_user == "")
			{
				alert("User Name Required");
				return false;
			
			}
			if(check_email == "")
			{
				alert("Email is Required");
				return false;
			}
			if(check_pass == "")
			{
			
				alert("Password is Required");
				return false;
			}
			if(check_conf_pass == "")
			{
			
				alert("Confirm Password ");
				return false;

			}
		}	
	</script>						 
	</head>
	<body>
	<div class="topnav">
	<a class="active" href="../index.php">Home</a>
	</div>
	

		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               			<div class="panel-title text-center">
	               			<h1 class="title">GUNDOGDU-AVM</h1>
	               			<hr />
	               			</div>
	            			</div> 
						<div class="main-login main-center">
						 <form name="g-form" method="post" action="/insert/user_insert.php">
							<?php
								$msg = $_GET['msg'];
				                                echo "<span>";
								echo $msg;
								echo "</span>";
							
							?>	
							<div class="form-group">
								<label for="email" class="cols-sm-2 control-label">Your Email</label>
								<div class="cols-sm-10">
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" required="" name="email" id="e_mail"/>
								</div>
							</div>
						</div>

					<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" required="" name="u_name" id="user_name"/>
								</div>
							</div>
						</div>
					
					<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" required="" name="pass" id="pass_word"/>
								</div>
							</div>
						</div>

					<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" required="" name="pass1" id="c_password"/>
								</div>
							</div>
						</div>



						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Register" onclick="validateForm();" >Register</button>
						</div>
						<div class="login-register">
							<a href="/login/login.php">Login</a>
						</div>

					</form>
				</div>
			</div>
		</div>



















	</body>

</html>
