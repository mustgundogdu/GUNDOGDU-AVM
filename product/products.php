<?php

session_start();

$conn = mysqli_connect('localhost', 'yolgezer', 'g1b3kc4t', 'products');

if (!$conn)
{

	die("Connection Failed" . mysqli_error($conn));
}
?>
<html>

<head>
<title>GUNDOGDU-AVM LAPTOPS</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="/css/style2.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>
<body>

<div class="topnav">
<a class="active" href="../index.php">Home</a>
<a href="../contact.php">Contact</a>
<div class="ses">
<?php
if (isset($_SESSION['login_user']) == true)
{
	echo "Hello ". $_SESSION['login_user'] ."<br>";
}
?>
</div>
</div>
<div class="product">

<h1><p style="color:#55D178">Products</p></h1>
<br></br>

<?php

if ($_GET["category"] == "all")
{
	$q = "select price,p_inf,image from category inner join c_product on category.id = c_product.id;";
	$r = mysqli_query($conn, $q);
	while($ro = mysqli_fetch_array($r))
	{
		echo "<figure>";
		echo '
                <tr>
             <td>
                <img src="data:image/jpeg;base64,'.base64_encode($ro['image']) . ' " height="300" class="img-thumnail" />
                </td>
        	</tr>
';		
		echo "<br></br>";
		echo "<br></br>";		
		echo "<tr>";
		
		echo "</tr>";
		echo "<td>" . $ro['p_inf'] . "</td>";
		echo "<br></br>";
		echo "<b><th>Price:</th></b>";
		echo "<td>" . $ro['price'] . "</td>";
		echo "<br></br>";
		


	
	}
echo "</figure>";

}

else{
$query = "SELECT p_inf,price,image FROM category INNER JOIN c_product ON category.id = c_product.id WHERE category.id=" . $_GET["category"];
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result))
{

	 echo "<figure>";	 
	 echo '
                <tr>
	     <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['image']).' " height="300" class="img-thumnail" />
                </td>
        </tr>
        ';
	
	echo "<br></br>";
	echo "<br></br>";
	echo "<tr>";
	echo "</tr>";

	echo "<b><td>" . $row['p_inf'] ."</td></b>";
	echo "<br></br>";
	echo "<b><th>Price:</th><b>";
	echo "<b><td>" . $row['price'] . "</td></b>";
	echo "<br></br>";
	

	}
echo "</figure>";
}

?>



<center>
<?php
$query = "SELECT * FROM comments ORDER BY id DESC";
$result = mysqli_query($conn, $query);

echo "<div class='container'>";
print "<br></br>";
//echo "<b><h1><p style='color:#55D178'>Comments</h1></b>";
//print "<b><h3>Comments</b></h3>";
while($rows = mysqli_fetch_array($result))
{
        $nam = $rows['name'];
        $commen = $rows['Comment'];
	
	print "<div class='card card-inner'>";
	print "<div class='card-body'>";
	print "<div class='row'>";
	print "<div class='col-md-2'>";
	print "<img src='https://image.ibb.co/jw55Ex/def_face.jpg' height='15' width='50' class='img img-rounded img-fluid'/>";
	print "</div>";
	print "<div class='col-md-10'>";
	print "<p style='color:#55D178'>" . "<strong>" . $nam . "</strong>";
	print "</p>";
	print "<div class='clearfix'>" . "</div>";
	print "<p>" . $commen . "</p>";
	print "</div>";
	print "</div>";
	print "</div>";
	print "</div>";

}
echo "</div>";

?>

  
<form method="POST">
	<br></br>
	<br></br>
	<table>
		<tr><td>Name: <br><input type="text" name="com_name"/></td></tr>
		<tr><td colspan="2">Comment: </td></tr>
		<tr><td colspan="5"><textarea name="comment" rows="10" cols="50"></textarea></td></tr>
		<tr><td colspan="2"><input type="submit" name="submit" value="Submit"></td></tr>
	</table>
</form>


<?php

$name = $_POST['com_name'];
$comment = $_POST['comment'];
$submit = $_POST['submit'];

if($submit)
{
	if($name && $comment)
	{
		$nam = preg_replace('/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i','',$name);
		$comm = preg_replace('/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i','',$comment);

		mysqli_query($conn,"INSERT INTO comments(name, comment) VALUES('$nam', '$comm')");
		echo "<meta HTTP-EQUIV='REFRESH' content='0; url=products.php?category=all'>";

	
	}
	else
	{
		echo "Please fill out all fields";
	
	}

}


?>
</div>
</body>
</html>
