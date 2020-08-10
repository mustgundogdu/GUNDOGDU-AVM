<html>

<head>
<title>Email Change</title>

<link rel="stylesheet" href="/css/style2.css">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>
<body>
<div class='topnav'>
<ul class="nav">
<li class="active"><a class="active" href="index.php">Home</a>
<li class="active"><?php echo '<a href="/contact/contact_con.php?page=contact_view.php">My Messages</a>';?></li>
<li><a href="contact.php">Contact</a>
<li><a href="logout.php">Sign Out</a>

</ul>
</div>
</div>


<div class="product">
<form  action="email.php" method="POST">
<input type="text" name="mail" placeholder="New Email">
<input type="submit" name="submit" value="Change">
</form>

</div>

</body>
</html>
