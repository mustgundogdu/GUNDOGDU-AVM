<?php
session_start();

?>
<html>
<head>
<title>Your Messages</title>
<link rel="stylesheet" href="/css/message.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

<div class="topnav">
<a class="active" href="../index.php">Home</a>

<div class="ses" ><?php echo "Welcome " . $_SESSION['login_user'] . "<br>";?>


</div>
</div>

<div class="container">
<div class="row">
<h2><p style="color:#55D178">Messages</p></h2>
</div>	
	
<?php



if($_SESSION['login_user'])
{

	include("config.php");
	
	$n = $_SESSION['login_user'];
	
	$query = "SELECT name,Content,c_date from contact where name='$n'";
	$result = mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result))
	{
		echo "<hr>";
		echo "<div class='row comment'>";
		echo "<div class='head'>";
		echo "<small>" . "<strong class='user'>" . $_row['name'] . "</strong>" . $row['c_date'] . "</small>";

		echo "</div>";
		echo "<p>" . $row['Content'] . "</p>";
		echo "</div>";
					
	
	}

}
?>

</body>
</html>
