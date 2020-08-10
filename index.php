<?php
session_start();
?>
<html>
<head>
<title>GUNDOGDU-AVM</title>

<link rel="stylesheet" href="/css/style2.css">

</head>
<body>

 <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="contact.php">Contact</a>
<?php
if(isset($_SESSION['login_user']) == false)
{

	echo "<a href='/login/login.php'>Sign In</a>";
}

?>
  <div class="ses" >
<?php 
if (isset($_SESSION['login_user']) == true)
{
 //echo "Welcome ". $_SESSION['login_user'] . "<br>";
 echo "<a class=lout href='logout.php'>Sign Out</a>";
 echo "<a class=lout href='welcome.php'>My Account</a>";

}
?>
</div>
<?php
if (isset($_SESSION['login_user']) == false)
{
echo "<a href='register.php'>Sign Up</a>";
}
	
?>
</div>
<section class="search-filters">

<label>Refine your search:</label>
<a href="/product/products.php?category=all">All</a>
<a href="/product/products.php?category=2">Phones</a>
<a href="/product/products.php?category=1">Laptops</a>
</section>

<div class="newbva">
	
	<form class="searching" action="search.php">
  		<input type="text" placeholder="Search.." name="query">
  		<button type="submit">Search</button>
	</form>

</div>


</body>
</html>


