<?php
session_start();


?>
<html>
<head>
<title>GUNDOGDU-AVM</title>
<link rel="stylesheet" href="/css/style2.css">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>

<body>

<div class='topnav'>
<!--
<div class='navbar navbar-inverse'>
<div class='navbar-inner nav-collapse' style="height: auto;">
-->
<ul class="nav">
<li class="active"><a class="active" href="index.php">Home</a>
<li class="active"><?php echo '<a href="/contact/contact_con.php?page=contact_view.php">My Messages</a>';?></li>
<li><a href="contact.php">Contact</a>
<li><a href="logout.php">Sign Out</a>

</ul>
</div>
</div>

 <div id='content' class='row-fluid'>
    <div class='span2 sidebar'>

      </div>

<div id='content' class='row-fluid'>
	<div class='span8 main'>
		<h2><p style="color:#55D178">ACCOUNT</p></h2>
		<h4><p>This page display about you informations. if you want to change your information, you can do it here.</p></h4>
<?php
$username = $_SESSION['login_user'];
include("config.php");

	echo "<figure>";
        $query = "SELECT username,email from users WHERE username='$username'";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($result))
        {
        
                echo "<br></br>";
                echo "<h3><b><th> User Name" . "</th></b></h3>";
                echo "<h4><td>" . $row['username'] . "</td></h4>";
		echo "<br></br>";

                echo "<h3><b><th> Email " . "</th></b></h3>";
                echo "<h4><td>" . $row['email'] . "</td></h4>";
		

        }
		
	echo "</figure>";


?>
</div>
<div class='span2 sidebar'>
<h3><p style="color:#55D178">User Operations</p></h3>
<ul class="nav nav-tabs nav-stacked">
<li><a href="email_change.php">Email Change</a></li>

<?php
	if ($_SESSION['userid'] == 1)
	{
		echo "<li>" . "<a href='/admin/admin_panel.php'>Admin Panel" . "</a>" . "</li>";

	
	}
?>
</ul>
</div>

</body>
</html>
