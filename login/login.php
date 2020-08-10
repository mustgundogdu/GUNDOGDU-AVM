<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>
<link rel="stylesheet" type="text/css" href="/css/login.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="topnav">
<a class="active" href="../index.php">Home</a>
<?php
session_start();
if($_SESSION['login_user'] == 'administrator')
{
	echo "<a href='/admin/admin_panel.php'>Admin Panel</a>";
}
?>
</div>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
   
	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  	<path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
  	<path d="M13.784 14c-.497-1.27-1.988-3-5.784-3s-5.287 1.73-5.784 3h11.568z"/>
  	<path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
	</svg>   
</div>

    <!-- Login Form -->
    <form id="login-form" method="post" action="auth_login.php">
      <input type="text" id="user" class="fadeIn second" required="" name="user" placeholder="Username">
      <input type="text" id="pass" class="fadeIn third" required="" name="pass" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Sign In">
    </form>

    

  </div>
</div>

</body>

</html>
