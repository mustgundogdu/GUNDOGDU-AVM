<html>

<head>
<title>GUNDOGDU-AVM LAPTOPS</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><
/script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js
"></script>

<link rel="stylesheet" href="/css/style2.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css
/bootstrap.min.css" /> 
</head>
<body>

<div class="topnav">
<a class="active" href="../index.php">Home</a>
<a href="#contact">Contact</a>
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

<h2><th>Products</th></h2>

<?php

session_start();
$conn = mysqli_connect('localhost', 'yolgezer', 'g1b3kc4t', 'products');

if(!$conn)
{
	
	die("Connection Failed!");


}

$query = $_GET['query'];

$q = "SELECT price,p_inf,image FROM category inner join c_product on category.id = c_product.id WHERE p_inf LIKE '%$query%'";


	
$raw_results = mysqli_query($conn, $q);

while($results = mysqli_fetch_array($raw_results))
{

	echo "<figure>";
                echo '
                <tr>
             <td>
                <img src="data:image/jpeg;base64,'.base64_encode($results['image']) . ' " height="200" clas
s="img-thumnail" />
                </td>
                </tr>
';
		echo "<br></br>";
                echo "<br></br>";
                echo "<tr>";

                echo "</tr>";
                echo "<td>" . $results['p_inf'] . "</td>";
                echo "<br></br>";
                echo "<b><th>Price:</th></b>";
                echo "<td>" . $results['price'] . "</td>";
                echo "<br></br>";


}
	
echo "</figure>";



?>
<br></br>
</div>
</body>
</html>
