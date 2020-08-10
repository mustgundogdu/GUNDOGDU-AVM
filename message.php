<!DOCTYPE HTML>
<html>
<head>
<title>MESSAGE</title>
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<div class="topnav">
<a class="active" href="../index.php">Home</a>
</div>

<div class="login-box">
<?php

if (isset($_GET['msg']))
{
	$m = $_GET['msg'];
	$msg = str_replace('<script>','',$m);
	
	$url = 'register.php';
	
	echo '<META HTTP-EQUIV=Refresh CONTENT="3; URL='.$url.'">';
	echo '<p>'. $msg .'</p>';
}
if (isset($_GET['success']))
{
	$s = $_GET['success'];
	$succes = str_replace('<script>','',$s);

	$url = '/login/login.php';
	
	echo '<META HTTP-EQUIV=Refresh CONTENT="3; URL='.$url.'">';
	echo '<p>' . $succes . '</p>';
}

if (isset($_GET['register']))
{

	$r = $_GET['register'];
	$regis = str_replace('<script>','', $r);
	$url = 'register.php';
	
	echo '<META HTTP-EQUIV=Refresh CONTENT="3; URL='.$url.'">';
	echo '<p>' . $regis . '</p>';

}

if (isset($_GET['contact']))
{
	$c = $_GET['contact'];
	$cont = str_replace('<script>','',$c);
        $url = 'index.php';

        echo '<META HTTP-EQUIV=Refresh CONTENT="3; URL='.$url.'">';
	echo '<p>' . $cont . '</p>';


}
if(isset($_GET['contact_fail']))
{
	$c_f = $_GET['contact_fail'];
	$fail = str_replace('<script>','',$c_f);

        $url = 'contact.php';

        echo '<META HTTP-EQUIV=Refresh CONTENT="3; URL='.$url.'">';
	echo '<p>' . $fail . '</p>';

}

if(isset($_GET['login_fail']))
{
	$l_f = $_GET['login_fail'];
	$log_f = str_replace('<script>','',$l_f);
        $url = '/login/login.php';

        echo '<META HTTP-EQUIV=Refresh CONTENT="3; URL='.$url.'">';
	echo '<p>' . $log_f .'</p>';

}
if(isset($_GET['client_fail']))
{
	$cl_f = $_GET['client_fail'];
	$client = str_replace('<script>','',$cl_f);

        $url = 'register.php';

        echo '<META HTTP-EQUIV=Refresh CONTENT="3; URL='.$url.'">';
	echo '<p>' . $client . '</p>';

}
if(isset($_GET['email_success']))
{
	$e = $_GET['email_success'];
	$e_s = str_replace('<script>','',$e);

	$url = 'email_change.php';

	echo '<META HTTP-EQUIV=Refresh CONTENT="2; URL='.$url.'">';
	echo '<p>' . $e_s .'</p>';

}
?>
</div>
</body>
</html>

